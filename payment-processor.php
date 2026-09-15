<?php
session_start();
include("application-top.php");
include("includes/ClientSettings.php");
include("includes/class.phpmailer.php");

function payment_success_exec()
{
	$rentFlag =  new ClientSettings();
	if (isset($_POST) && isset($_POST['Total_Amount']) && $_POST['Response_Code'] == 'E000') {
		$res = $_POST;

		// Same encryption key that we gave for generating the URL
		$aes_key_for_payment_success = ($rentFlag->isRentPaymentEnabled == '0' ? '6000042701405012' : '3721982738901000');
		$data = array(
			'Response_Code' => $res['Response_Code'],
			'Unique_Ref_Number' => $res['Unique_Ref_Number'],
			'Service_Tax_Amount' => $res['Service_Tax_Amount'],
			'Processing_Fee_Amount' => $res['Processing_Fee_Amount'],
			'Total_Amount' => $res['Total_Amount'],
			'Transaction_Amount' => $res['Transaction_Amount'],
			'Transaction_Date' => $res['Transaction_Date'],
			'Interchange_Value' => $res['Interchange_Value'],
			'TDR' => $res['TDR'],
			'Payment_Mode' => $res['Payment_Mode'],
			'SubMerchantId' => $res['SubMerchantId'],
			'ReferenceNo' => $res['ReferenceNo'],
			'ID' => $res['ID'],
			'RS' => $res['RS'],
			'TPS' => $res['TPS'],
			'RSV' => $res['RSV'],
			'mandatory_fields' => $res['mandatory_fields'],
			'optional_fields' => $res['optional_fields']
		);

		$verification_key = $data['ID'] . '|' . $data['Response_Code'] . '|' . $data['Unique_Ref_Number'] . '|' .
			$data['Service_Tax_Amount'] . '|' . $data['Processing_Fee_Amount'] . '|' . $data['Total_Amount'] . '|' .
			$data['Transaction_Amount'] . '|' . $data['Transaction_Date'] . '|' . $data['Interchange_Value'] . '|' .
			$data['TDR'] . '|' . $data['Payment_Mode'] . '|' . $data['SubMerchantId'] . '|' . $data['ReferenceNo'] . '|' .
			$data['TPS'] . '|' . $aes_key_for_payment_success;

		$encrypted_message = hash('sha512', $verification_key);
		if ($encrypted_message == $data['RS']) {
			$response_code = $data['Response_Code'];
			$subMerchantId = $data['SubMerchantId'];
			$mandatory_fields = $data['mandatory_fields'];
			$optional_fields = $data['optional_fields'];
			$service_tax_amount = $data['Service_Tax_Amount'];
			$processing_fee_amount = $data['Processing_Fee_Amount'];
			$unique_ref_number = $data['Unique_Ref_Number'];
			$total_amount_paid = $data['Total_Amount'];
			$transaction_amount = $data['Transaction_Amount'];
			$interchange_value = $data['Interchange_Value'];
			$TDR = $data['TDR'];
			$RS = $data['RS'];
			$RSV = $data['RSV'];
			$TPS = $data['TPS'];
			$payment_mode = $data['Payment_Mode'];
			$referenceNo = $data['ReferenceNo'];
			$merchant_id = $data['ID'];
			$transaction_status = response_code($data['Response_Code']);
			$transaction_date = $data['Transaction_Date'];
			$rent_fields = explode('|',  $mandatory_fields);
			$_SESSION['companyEmail'] =  $rent_fields['3'];
			$_SESSION['rentQuarter'] =  $rent_fields['5'];
			$_SESSION['rentYear'] =  $rent_fields['4'];
			$comp_fields = explode('|', $optional_fields);
			$_SESSION['companyName'] = $comp_fields['0'];
			$_SESSION['companyPhone']  = $comp_fields['1'];
			$_SESSION['bank_transaction_id'] = $unique_ref_number;
			$_SESSION['bank_transaction_amount'] = $transaction_amount;
			$_SESSION['paymentMode'] = $payment_mode;
			$_SESSION['transactionDate'] = $transaction_date;
			if ($rentFlag->isRentPaymentEnabled == '0') {
				$con = mysqli_connect("10.192.147.205", "fsez_webdev", "FaltaOB@2025", "fsez_db");
			} else {
				$con = mysqli_connect("10.192.147.205", "fsez_webdev", "FaltaOB@2025", "fsez_db");
			}
			// $con = mysqli_connect("localhost", "root", "", "fsez");
			$sql = "update `fsez_rent_payments` set response_code = '$response_code' , subMerchantId = '$subMerchantId', mandatory_fields = '$mandatory_fields', optional_fields = '$optional_fields' , service_tax_amount = '$service_tax_amount' , processing_fee_amount = '$processing_fee_amount', unique_ref_number = '$unique_ref_number', total_amount_paid = '$total_amount_paid', transaction_amount = '$transaction_amount', interchange_value = '$interchange_value', TDR = '$TDR', RS = '$RS', RSV = '$RSV', TPS = '$TPS', payment_mode = '$payment_mode', merchant_id = '$merchant_id', transaction_status = '$transaction_status', transaction_date = '$transaction_date' where referenceNo = '$referenceNo'";
			$res = mysqli_query($con, $sql) or die("Something unusual occured");
			if ($res) {
				/* Update the payment status in rent status table */
				$tsql =  "select rent_status_id from fsez_rent_payments where referenceNo = '$referenceNo'";
				$tres =   mysqli_query($con, $tsql);
				$trow =   mysqli_fetch_array($tres);
				mysqli_query($con, "update fsez_rent_status set is_rent_paid = '1' where rent_status_id =" . $trow["rent_status_id"]);
			}
			return true;
		} else {
			return false;
		}
	} else {
		$res = $_POST;
		$data = array(
			'Response_Code' => $res['Response_Code'],
			'Unique_Ref_Number' => $res['Unique_Ref_Number'] ? $res['Unique_Ref_Number'] : "No Data",
			'Service_Tax_Amount' => $res['Service_Tax_Amount'] ? $res['Service_Tax_Amount'] : "No Data",
			'Processing_Fee_Amount' => $res['Processing_Fee_Amount'] ? $res['Processing_Fee_Amount'] : "No Data",
			'Total_Amount' => $res['Total_Amount'] ? $res['Total_Amount'] : "0.00",
			'Transaction_Amount' => $res['Transaction_Amount'] ? $res['Transaction_Amount'] : "0.00",
			'Transaction_Date' => $res['Transaction_Date'] ? $res['Transaction_Date'] : date('Y-m-d h:i:s'),
			'Interchange_Value' => $res['Interchange_Value'],
			'TDR' => $res['TDR'] ? $res['TDR'] : "No Data",
			'Payment_Mode' => $res['Payment_Mode'],
			'SubMerchantId' => $res['SubMerchantId'],
			'ReferenceNo' => $res['ReferenceNo'],
			'ID' => $res['ID'] ? $res['ID'] : "No Data",
			'RS' => $res['RS'] ? $res['RS'] : "No Data",
			'TPS' => $res['TPS'] ? $res['TPS'] : "No Data",
			'RSV' => $res['RSV'] ? $res['RSV'] : "No Data",
			'mandatory_fields' => $res['mandatory_fields'],
			'optional_fields' => $res['optional_fields']
		);

		$response_code = $data['Response_Code'];
		$subMerchantId = $data['SubMerchantId'];
		$mandatory_fields = $data['mandatory_fields'];
		$optional_fields = $data['optional_fields'];
		$service_tax_amount = $data['Service_Tax_Amount'];
		$processing_fee_amount = $data['Processing_Fee_Amount'];
		$unique_ref_number = $data['Unique_Ref_Number'];
		$total_amount_paid = $data['Total_Amount'];
		$transaction_amount = $data['Transaction_Amount'];
		$interchange_value = $data['Interchange_Value'];
		$TDR = $data['TDR'];
		$RS = $data['RS'];
		$RSV = $data['RSV'];
		$TPS = $data['TPS'];
		$payment_mode = $data['Payment_Mode'];
		$referenceNo = $data['ReferenceNo'];
		$merchant_id = $data['ID'];
		$transaction_status = response_code($data['Response_Code']);
		$transaction_date = $data['Transaction_Date'];
		$rent_fields = explode('|',  $mandatory_fields);
		$_SESSION['companyEmail'] =  $rent_fields['3'];
		$_SESSION['rentQuarter'] =  $rent_fields['5'];
		$_SESSION['rentYear'] =  $rent_fields['4'];
		$comp_fields = explode('|', $optional_fields);
		$_SESSION['companyName'] = $comp_fields['0'];
		$_SESSION['companyPhone']  = $comp_fields['1'];
		$_SESSION['bank_transaction_id'] = $unique_ref_number;
		$_SESSION['bank_transaction_amount'] = $transaction_amount;
		$_SESSION['paymentMode'] = $payment_mode;
		$_SESSION['transactionDate'] = $transaction_date;
		$_SESSION['bank_transaction_id'] = $unique_ref_number;
		$_SESSION['bank_transaction_amount'] = $transaction_amount;
		$_SESSION['error_response'] = response_code($_POST['Response_Code']);
		/* Updating the Payment Gateway transaction details to DB on failure */
		if ($rentFlag->isRentPaymentEnabled == '0') {
			$con = mysqli_connect("10.192.147.205", "fsez_webdev", "FaltaOB@2025", "fsez_db");
		} else {
			$con = mysqli_connect("10.192.147.205", "fsez_webdev", "FaltaOB@2025", "fsez_db");
		}
		if (isset($_POST['Response_Code'])) {
			$sql = "update `fsez_rent_payments` set response_code = '$response_code' , subMerchantId = '$subMerchantId', mandatory_fields = '$mandatory_fields', optional_fields = '$optional_fields' , service_tax_amount = '$service_tax_amount' , processing_fee_amount = '$processing_fee_amount', unique_ref_number = '$unique_ref_number', total_amount_paid = '$total_amount_paid', transaction_amount = '$transaction_amount', interchange_value = '$interchange_value', TDR = '$TDR', RS = '$RS', RSV = '$RSV', TPS = '$TPS', payment_mode = '$payment_mode', merchant_id = '$merchant_id',  transaction_status = '$transaction_status', transaction_date = '$transaction_date' where referenceNo = '$referenceNo'";
			$res = mysqli_query($con, $sql) or die("Something unusual occured");
		}
		return false;
	}
}
?>

<?php
if (payment_success_exec()) {
	/* Success Email Template */
	$message = file_get_contents('email-templates/payment-success.html');
	$message = str_replace('%bank_transaction_id%', $_SESSION['bank_transaction_id'], $message);
	$message = str_replace('%bank_transaction_amount%', $_SESSION['bank_transaction_amount'], $message);
	$message = str_replace('%rentYear%', $_SESSION['rentYear'], $message);
	$message = str_replace('%rentQuarter%', $_SESSION["rentQuarter"], $message);
	$message = str_replace('%companyName%', $_SESSION['companyName'], $message);
	$message = str_replace('%transactionDate%', $_SESSION['transactionDate'], $message);
	$message = str_replace('%companyPhone%', $_SESSION['companyPhone'], $message);
	$message = str_replace('%paymentMode%', $_SESSION['paymentMode'], $message);

	/* Send Email to the payer */
	send_payment_email($_SESSION['companyEmail'], "noreply@fsez.gov.in",  "Success : Rent payment transaction", $message);

	/* Send Email to the owner */
	send_payment_email("avikdatta2020@gmail.com", $_SESSION['companyEmail'], "Success : " . $_SESSION['companyName'] . " has paid the rent successfully", $message);

	/* Redirect to Success Page */
	header("location:thank-you.php");
} else {
	/* Failure Email Template */
	$message = file_get_contents('email-templates/payment-failure.html');
	$message = str_replace('%bank_transaction_id%', $_SESSION['bank_transaction_id'], $message);
	$message = str_replace('%bank_transaction_amount%', $_SESSION['bank_transaction_amount'], $message);
	$message = str_replace('%rentYear%', $_SESSION['rentYear'], $message);
	$message = str_replace('%rentQuarter%', $_SESSION["rentQuarter"], $message);
	$message = str_replace('%companyName%', $_SESSION['companyName'], $message);
	$message = str_replace('%transactionDate%', $_SESSION['transactionDate'], $message);
	$message = str_replace('%companyPhone%', $_SESSION['companyPhone'], $message);
	$message = str_replace('%paymentMode%', $_SESSION['paymentMode'], $message);
	$message = str_replace('%error_response%', $_SESSION['error_response'], $message);

	/* Send Email to the payer */
	send_payment_email($_SESSION['companyEmail'], "noreply@fsez.gov.in",  "Success : Rent payment transaction", $message);

	/* Send Email to the DEV Team */
	send_payment_email("connect@openbraces.in", "noreply@fsez.gov.in",  "Rent Payment Failure for " . $_SESSION['companyName'], $message);

	/* Redirect to Failure Page */
	header("location:failed-transaction.php");
}
?>

