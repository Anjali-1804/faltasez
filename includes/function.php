<?php
include('mailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!defined('FSEZ_SMTP_USERNAME')) {
	$fsezMailSecrets = __DIR__ . '/mail-secrets.php';
	if (is_file($fsezMailSecrets)) {
		require $fsezMailSecrets;
	} else {
		define('FSEZ_SMTP_USERNAME', '');
		define('FSEZ_SMTP_PASSWORD', '');
	}
}

function fsez_ext_url($url)
{
	$url = trim((string) $url);
	if ($url === "" || $url === "#") {
		return "";
	}
	if (preg_match('#^https?://#i', $url)) {
		return $url;
	}
	return "https://" . ltrim($url, "/");
}

function fsez_upload_href($folder, $filename)
{
	$filename = trim((string) $filename);
	if ($filename === "" || $filename === "noimage.gif") {
		return "";
	}
	$rel = rtrim($folder, "/") . "/" . $filename;
	if (file_exists($rel)) {
		return $rel;
	}
	return "https://fsez.gov.in/" . str_replace(" ", "%20", $rel);
}

function fsez_file_ext_label($filename)
{
	$ext = strtolower(pathinfo((string) $filename, PATHINFO_EXTENSION));
	$map = array(
		"pdf" => "PDF",
		"doc" => "DOC",
		"docx" => "DOCX",
		"xls" => "XLS",
		"xlsx" => "XLSX",
		"zip" => "ZIP",
		"jpg" => "JPG",
		"jpeg" => "JPEG",
		"png" => "PNG",
	);
	if (isset($map[$ext])) {
		return $map[$ext];
	}
	// Some uploads have no extension, or a date fragment such as "17.10.2025".
	if (preg_match('/^[a-z]{2,5}$/', $ext)) {
		return strtoupper($ext);
	}
	return "PDF";
}

/**
 * File sizes for download links, required by GIGW along with title and format.
 *
 * Documents kept on this server are measured directly. Documents still served
 * from fsez.gov.in are measured once with a HEAD request and remembered in
 * includes/file-size-cache.json, so the same lookup is never paid for twice.
 * A zero in that cache means "asked and could not tell" - delete the file to
 * make the site probe again.
 */
function fsez_size_label_from_bytes($bytes)
{
	$bytes = (int) $bytes;
	if ($bytes <= 0) {
		return "";
	}
	if ($bytes >= 1048576) {
		return number_format($bytes / 1048576, 2) . " MB";
	}
	if ($bytes >= 1024) {
		return number_format($bytes / 1024, 1) . " KB";
	}
	return $bytes . " B";
}

function &fsez_size_cache_store()
{
	static $store = null;
	if ($store === null) {
		$store = array("data" => array(), "dirty" => false);
		$raw = @file_get_contents(dirname(__FILE__) . "/file-size-cache.json");
		if ($raw !== false) {
			$decoded = json_decode($raw, true);
			if (is_array($decoded)) {
				$store["data"] = $decoded;
			}
		}
	}
	return $store;
}

function fsez_size_cache_flush()
{
	$store = &fsez_size_cache_store();
	if (!$store["dirty"]) {
		return;
	}
	$store["dirty"] = false;
	@file_put_contents(dirname(__FILE__) . "/file-size-cache.json", json_encode($store["data"]), LOCK_EX);
}

/**
 * Byte count for a document hosted on the live site.
 *
 * Returns null when there is no way to ask (no curl, no https stream wrapper,
 * request budget spent) so the caller does not cache a transport failure as a
 * real answer. Returns 0 only when the server replied without a length.
 */
function fsez_remote_file_size($url)
{
	// Capped per request so a long table cannot stall on a slow network. The
	// cache fills in over the next few page loads.
	static $budget = 8;
	if ($budget <= 0 || !filter_var($url, FILTER_VALIDATE_URL)) {
		return null;
	}
	$budget--;

	if (function_exists("curl_init")) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
		curl_setopt($ch, CURLOPT_TIMEOUT, 4);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
		$ok = curl_exec($ch);
		$status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
		curl_close($ch);
		if ($ok === false || $status === 0) {
			return null;
		}
		return $length > 0 ? (int) $length : 0;
	}

	if (!in_array("https", stream_get_wrappers(), true)) {
		return null;
	}
	stream_context_set_default(array(
		"http" => array("method" => "HEAD", "timeout" => 3, "follow_location" => 1, "max_redirects" => 3),
	));
	$headers = @get_headers($url, 1);
	stream_context_set_default(array("http" => array("method" => "GET")));
	if (!is_array($headers)) {
		return null;
	}
	if (!isset($headers["Content-Length"])) {
		return 0;
	}
	$length = $headers["Content-Length"];
	if (is_array($length)) {
		$length = end($length);
	}
	return (int) $length;
}

function fsez_file_size_label($folder, $filename)
{
	$filename = trim((string) $filename);
	if ($filename === "") {
		return "";
	}
	$rel = rtrim($folder, "/") . "/" . $filename;
	if (is_file($rel)) {
		return fsez_size_label_from_bytes(filesize($rel));
	}
	$store = &fsez_size_cache_store();
	if (isset($store["data"][$rel])) {
		return fsez_size_label_from_bytes($store["data"][$rel]);
	}
	$bytes = fsez_remote_file_size("https://fsez.gov.in/" . str_replace(" ", "%20", $rel));
	if ($bytes === null) {
		return "";
	}
	if (!$store["dirty"]) {
		$store["dirty"] = true;
		register_shutdown_function("fsez_size_cache_flush");
	}
	$store["data"][$rel] = $bytes;
	return fsez_size_label_from_bytes($bytes);
}

/**
 * Last updated date for the page being viewed, from the newest of the page
 * itself and the shared header/footer. GIGW asks for a last updated or last
 * reviewed date rather than a hand-edited string that goes stale.
 */
function fsez_last_updated_html()
{
	$times = array();
	$here = dirname(__FILE__);
	foreach (array($here . "/header.php", $here . "/footer.php") as $shared) {
		if (is_file($shared)) {
			$times[] = filemtime($shared);
		}
	}
	if (isset($_SERVER["SCRIPT_FILENAME"]) && is_file($_SERVER["SCRIPT_FILENAME"])) {
		$times[] = filemtime($_SERVER["SCRIPT_FILENAME"]);
	}
	$stamp = count($times) > 0 ? max($times) : time();
	return '<time datetime="' . date("Y-m-d", $stamp) . '">' . date("d F Y", $stamp) . "</time>";
}

function fsez_issue_date_html($dmy)
{
	$dmy = trim((string) $dmy);
	if (preg_match('/^(\d{1,2})-(\d{1,2})-(\d{4})$/', $dmy, $m)) {
		$iso = sprintf("%04d-%02d-%02d", (int) $m[3], (int) $m[2], (int) $m[1]);
		return '<time datetime="' . $iso . '">' . htmlspecialchars($dmy) . "</time>";
	}
	return htmlspecialchars($dmy);
}

function fsez_doc_download_cell($folder, $filename, $title)
{
	$href = fsez_upload_href($folder, $filename);
	if ($href === "") {
		return "<span>Not available</span>";
	}
	$format = fsez_file_ext_label($filename);
	$size = fsez_file_size_label($folder, $filename);
	$visible = $format . ($size !== "" ? " (" . $size . ")" : "");
	$sr = "Download " . $title . ", " . $format . ($size !== "" ? ", " . $size : "") . ", opens in a new window";
	$icon = ($format === "PDF") ? "fa-file-pdf-o" : "fa-file-o";
	return '<a class="gov-doc-link" href="' . htmlspecialchars($href) . '" target="_blank" rel="noopener noreferrer">'
		. '<i class="fa ' . $icon . '" aria-hidden="true"></i> '
		. '<span aria-hidden="true">' . htmlspecialchars($visible) . "</span>"
		. '<span class="sr-only">' . htmlspecialchars($sr) . "</span></a>";
}

function get_category_name($cn)
{
	global $con;
	$mtsql = "select * from fsez_gallery_categories where category_id='$cn'";
	$mtres = mysqli_query($con, $mtsql);
	$mtrow = mysqli_fetch_object($mtres);

	echo str_replace(" ", "", $mtrow->category_name);
}

/* The gallery tables store no per-image caption, so the category name (which is
   the event title) is the only descriptive text available for alt attributes. */
function fsez_gallery_category_label($categoryId)
{
	global $con;
	static $labels = array();

	$key = (int)$categoryId;
	if (array_key_exists($key, $labels)) {
		return $labels[$key];
	}

	$labels[$key] = "";
	$res = mysqli_query($con, "select category_name from fsez_gallery_categories where category_id = " . $key);
	if ($res && ($row = mysqli_fetch_object($res))) {
		$name = str_replace("-", " ", (string)$row->category_name);
		$labels[$key] = trim(preg_replace('/\s+/', ' ', $name));
	}

	return $labels[$key];
}

/* Photographs are numbered within their own category, so the count restarts for
   each event rather than running across the whole page. */
function fsez_gallery_image_alt($categoryId)
{
	static $counters = array();

	$key = (int)$categoryId;
	$counters[$key] = isset($counters[$key]) ? $counters[$key] + 1 : 1;

	$label = fsez_gallery_category_label($categoryId);
	if ($label === "") {
		$label = "Falta Special Economic Zone photo gallery";
	}

	return $label . ", photograph " . $counters[$key];
}

function fsez_video_items()
{
	return array(
		array(
			"title" => "Glimpses of 12th International day of yoga celebration at FSEZ",
			"date" => "21 Jun 2026",
			"datetime" => "2026-06-21",
			"file" => "glimpse.mp4",
			"caption" => "Glimpses of 12th International day of yoga celebration at FSEZ",
			"transcript" => "This video is a visual record of the 12th International Day of Yoga at Falta Special Economic Zone on 21 June 2026. It shows glimpses of the yoga session and related programme on the FSEZ campus. A full spoken transcript is not held with this file. Email fsez@nic.in if you need one.",
		),
		array(
			"title" => "12th International day of yoga celebration in Falta Jurisdiction",
			"date" => "21 Jun 2026",
			"datetime" => "2026-06-21",
			"file" => "celebrations.mp4",
			"caption" => "12th International day of yoga celebration in Falta Jurisdiction",
			"transcript" => "This video is a visual record of the 12th International Day of Yoga celebrations in the Falta SEZ jurisdiction on 21 June 2026. It shows the yoga programme organised under the Office of the Development Commissioner, Falta SEZ. A full spoken transcript is not held with this file. Email fsez@nic.in if you need one.",
		),
	);
}

function docSize($path)
{
	$bytes = sprintf('%u', filesize($path));

	if ($bytes > 0) {
		$unit = intval(log($bytes, 1024));
		$units = array('B', 'KB', 'MB', 'GB');

		if (array_key_exists($unit, $units) === true) {
			return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
		}
	}

	return $bytes;
}

function check_sanity($data)
{
	global $con;
	$data = mysqli_real_escape_string($con, $data);
	$data = trim($data);
	$data = strip_tags($data);
	$data = htmlspecialchars($data);
	return $data;
}

function fsez_display_email($raw)
{
	$email = trim((string) $raw);
	if ($email === "" || strcasecmp($email, "NA") === 0) {
		return "—";
	}
	$decoded = str_ireplace(array("[at]", "[dot]"), array("@", "."), $email);
	$decoded = preg_replace("/\s+/", "", $decoded);
	if (filter_var($decoded, FILTER_VALIDATE_EMAIL)) {
		$safe = htmlspecialchars($decoded, ENT_QUOTES, "UTF-8");
		return '<a href="mailto:' . $safe . '">' . $safe . "</a>";
	}
	return htmlspecialchars($email, ENT_QUOTES, "UTF-8");
}

function show_contacts($cdata)
{
	global $con;
	$ctsql = "select fsez_designations.designation_id, fsez_designations.designation_name, fsez_designations.sequence, fsez_contacts.contact_name, fsez_contacts.contact_no, fsez_contacts.email_id, fsez_contacts.designation, fsez_contacts.status from fsez_designations inner join fsez_contacts on fsez_contacts.designation = fsez_designations.designation_id where fsez_designations.designation_id IN ($cdata) and fsez_contacts.status = 1 order by fsez_designations.sequence";
	$ctres = mysqli_query($con, $ctsql);
	if ($ctres) {
		while ($ctrow = mysqli_fetch_array($ctres)) {
			echo "<tr>";
			echo "<td>" . htmlspecialchars($ctrow["contact_name"], ENT_QUOTES, "UTF-8") . "</td>";
			echo "<td>" . htmlspecialchars($ctrow["designation_name"], ENT_QUOTES, "UTF-8") . "</td>";
			echo "<td>" . fsez_display_email($ctrow["email_id"]) . "</td>";
			echo "<td>" . htmlspecialchars($ctrow["contact_no"], ENT_QUOTES, "UTF-8") . "</td>";
			echo "</tr>";
		}
	}
}

function generateCompCode($str)
{
	$cpname = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $str);
	$chname = str_replace("-", "h", $cpname); // Remove Hyphen and replace with h
	$cpnewnm = strtolower(substr($chname, 0, 4));
	$chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$charLength = strlen($chars);
	$compCode = '';

	for ($i = 0; $i < 6; $i++) {
		$compCode .= $chars[rand(0, $charLength - 1)];
	}

	return $cpnewnm . strtoupper($compCode);
}

/* Payment Gateway response status with code */

function response_code($code)
{
	$rc = array(
		'E000' => 'Payment Successful.',
		'E001' => 'Unauthorized Payment Mode',
		'E002' => 'Unauthorized Key',
		'E003' => 'Unauthorized Packet',
		'E004' => 'Unauthorized Merchant',
		'E005' => 'Unauthorized Return URL',
		'E006' => '"Transaction Already Paid, Received Confirmation from the Bank, Yet to Settle the transaction with the Bank',
		'E007' => 'Transaction Failed',
		'E008' => 'Failure from Third Party due to Technical Error',
		'E009' => 'Bill Already Expired',
		'E0031' => 'Mandatory fields coming from merchant are empty',
		'E0032' => 'Mandatory fields coming from database are empty',
		'E0033' => 'Payment mode coming from merchant is empty',
		'E0034' => 'PG Reference number coming from merchant is empty',
		'E0035' => 'Sub merchant id coming from merchant is empty',
		'E0036' => 'Transaction amount coming from merchant is empty',
		'E0037' => 'Payment mode coming from merchant is other than 0 to 9',
		'E0038' => 'Transaction amount coming from merchant is more than 9 digit length',
		'E0039' => 'Mandatory value Email in wrong format',
		'E00310' => 'Mandatory value mobile number in wrong format',
		'E00311' => 'Mandatory value amount in wrong format',
		'E00312' => 'Mandatory value Pan card in wrong format',
		'E00313' => 'Mandatory value Date in wrong format',
		'E00314' => 'Mandatory value String in wrong format',
		'E00315' => 'Optional value Email in wrong format',
		'E00316' => 'Optional value mobile number in wrong format',
		'E00317' => 'Optional value amount in wrong format',
		'E00318' => 'Optional value pan card number in wrong format',
		'E00319' => 'Optional value date in wrong format',
		'E00320' => 'Optional value string in wrong format',
		'E00321' => 'Request packet mandatory columns is not equal to mandatory columns set in enrolment or optional columns are not equal to optional columns length set in enrolment',
		'E00322' => 'Reference Number Blank',
		'E00323' => 'Mandatory Columns are Blank',
		'E00324' => 'Merchant Reference Number and Mandatory Columns are Blank',
		'E00325' => 'Merchant Reference Number Duplicate',
		'E00326' => 'Sub merchant id coming from merchant is non numeric',
		'E00327' => 'Cash Challan Generated',
		'E00328' => 'Cheque Challan Generated',
		'E00329' => 'NEFT Challan Generated',
		'E00330' => 'Transaction Amount and Mandatory Transaction Amount mismatch in Request URL',
		'E00331' => 'UPI Transaction Initiated Please Accept or Reject the Transaction',
		'E00332' => 'Challan Already Generated, Please re-initiate with unique reference number',
		'E00333' => 'Referer value is null / invalid Referer',
		'E00334' => 'Value of Mandatory parameter Reference No and Request Reference No are not matched',
		'E00335' => 'Payment has been cancelled',
		'E0801' => 'FAIL',
		'E0802' => 'User Dropped',
		'E0803' => 'Canceled by user',
		'E0804' => 'User Request arrived but card brand not supported',
		'E0805' => 'Checkout page rendered Card function not supported',
		'E0806' => 'Forwarded / Exceeds withdrawal amount limit',
		'E0807' => 'PG Fwd Fail / Issuer Authentication Server failure',
		'E0808' => 'Session expiry / Failed Initiate Check, Card BIN not present',
		'E0809' => 'Reversed / Expired Card',
		'E0810' => 'Unable to Authorize',
		'E0811' => 'Invalid Response Code or Guide received from Issuer',
		'E0812' => 'Do not honor',
		'E0813' => 'Invalid transaction',
		'E0814' => 'Not Matched with the entered amount',
		'E0815' => 'Not sufficient funds',
		'E0816' => 'No Match with the card number',
		'E0817' => 'General Error',
		'E0818' => 'Suspected fraud',
		'E0819' => 'User Inactive',
		'E0820' => 'ECI 1 and ECI6 Error for Debit Cards and Credit Cards',
		'E0821' => 'ECI 7 for Debit Cards and Credit Cards',
		'E0822' => 'System error. Could not process transaction',
		'E0823' => 'Invalid 3D Secure values',
		'E0824' => 'Bad Track Data',
		'E0825' => 'Transaction not permitted to cardholder',
		'E0826' => 'Rupay timeout from issuing bank',
		'E0827' => 'OCEAN for Debit Cards and Credit Cards',
		'E0828' => 'E-commerce decline',
		'E0829' => 'This transaction is already in process or already processed',
		'E0830' => 'Issuer or switch is inoperative',
		'E0831' => 'Exceeds withdrawal frequency limit',
		'E0832' => 'Restricted card',
		'E0833' => 'Lost card',
		'E0834' => 'Communication Error with NPCI',
		'E0835' => 'The order already exists in the database',
		'E0836' => 'General Error Rejected by NPCI',
		'E0837' => 'Invalid credit card number',
		'E0838' => 'Invalid amount',
		'E0839' => 'Duplicate Data Posted',
		'E0840' => 'Format error',
		'E0841' => 'SYSTEM ERROR',
		'E0842' => 'Invalid expiration date',
		'E0843' => 'Session expired for this transaction',
		'E0844' => 'FRAUD - Purchase limit exceeded',
		'E0845' => 'Verification decline',
		'E0846' => 'Compliance error code for issuer',
		'E0847' => 'Caught ERROR of type:[ System.Xml.XmlException ] . strXML is not a valid XML string',
		'E0848' => 'Incorrect personal identification number',
		'E0849' => 'Stolen card',
		'E0850' => 'Transaction timed out, please retry',
		'E0851' => 'Failed in Authorize - PE',
		'E0852' => 'Cardholder did not return from Rupay',
		'E0853' => 'Missing Mandatory Field(s)The field card_number has exceeded the maximum length of',
		'E0854' => 'Exception in CheckEnrollmentStatus: Data at the root level is invalid. Line 1, position 1.',
		'E0855' => 'CAF status = 0 or 9',
		'E0856' => '412',
		'E0857' => 'Allowable number of PIN tries exceeded',
		'E0858' => 'No such issuer',
		'E0859' => 'Invalid Data Posted',
		'E0860' => 'PREVIOUSLY AUTHORIZED',
		'E0861' => 'Cardholder did not return from ACS',
		'E0862' => 'Duplicate transmission',
		'E0863' => 'Wrong transaction state',
		'E0864' => 'Card acceptor contact acquirer'
	);
	return $rc[$code];
}


function send_payment_email($recipent_email, $reply_to, $subject, $message)
{
	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->Mailer = "smtp";
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Priority = 1;
	$mail->Port = 587;
	$mail->Username = FSEZ_SMTP_USERNAME;
	$mail->Password = FSEZ_SMTP_PASSWORD;
	$mail->IsHTML(true);
	$mail->FromName = "Falta SEZ";
	$mail->AddAddress($recipent_email);
	$mail->SetFrom($reply_to);
	$mail->Subject = $subject;

	$mail->MsgHTML($message);
	if (!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		return false;
	} else {
		return true;
	}
}

function send_registration_confirmation($compId)
{
	global $con;
	$ntsql = "select company_name, company_code, company_email from  fsez_companies where company_id = '$compId'";
	$ntres = mysqli_query($con, $ntsql);
	$numrow = mysqli_num_rows($ntres);
	$row = mysqli_fetch_array($ntres);
	$message = file_get_contents('../email-templates/unit-registration-confirmation.html');
	$message = str_replace('%company_name%', $row['company_name'], $message);
	$message = str_replace('%company_code%', $row['company_code'], $message);
	if ($numrow > 0) {
		$mail = new PHPMailer(true);
		$mail->IsSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->Mailer = "smtp";
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Priority = 1;
		$mail->Port = 587;
		$mail->Username = FSEZ_SMTP_USERNAME;
		$mail->Password = FSEZ_SMTP_PASSWORD;
		$mail->IsHTML(true);
		$mail->FromName = "Falta SEZ";
		$mail->AddAddress($row['company_email']);
		$mail->SetFrom(FSEZ_SMTP_USERNAME);
		$mail->Subject = 'Congratulations - Your company has been registered successfully!';
		$mail->MsgHTML($message);
		if (!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
			return false;
		} else {
			$sql = "update fsez_companies set is_notification_sent = 1 where company_id = '$compId'";
			$res = mysqli_query($con, $sql);
			if ($res) {
				echo '1';
			}
		}
	} else {
		echo "<span> Email was not sent due to some issue... </span>";
	}
}