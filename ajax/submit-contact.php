<?php
/* ═══════════════════════════════════════════════════════
 * ajax/submit-contact.php
 * Handles the website contact form via AJAX (JSON response)
 * Called by: demo_index.php contact form
 * ═══════════════════════════════════════════════════════ */

/* Only allow POST requests */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit(json_encode(["status" => "error", "message" => "Method not allowed."]));
}

header("Content-Type: application/json; charset=UTF-8");

/* Bootstrap the app (connection, session, etc.) */
require_once(dirname(__DIR__) . "/includes/connection.php");

/* ── Input sanitisation ── */
$c_name    = trim(strip_tags($_POST["c_name"]    ?? ""));
$c_email   = trim(strip_tags($_POST["c_email"]   ?? ""));
$c_phone   = trim(strip_tags($_POST["c_phone"]   ?? ""));
$c_reason  = trim(strip_tags($_POST["c_reason"]  ?? ""));
$c_message = trim(strip_tags($_POST["c_message"] ?? ""));

/* ── Server-side validation ── */
$errors = [];

if (!$c_name || strlen($c_name) > 120) {
    $errors[] = "Please enter a valid full name.";
}
if (!filter_var($c_email, FILTER_VALIDATE_EMAIL) || strlen($c_email) > 180) {
    $errors[] = "Please enter a valid email address.";
}
if (!preg_match('/^[0-9]{7,15}$/', $c_phone)) {
    $errors[] = "Please enter a valid phone number (digits only, 7–15 digits).";
}

$allowed_reasons = [
    "Set up a new unit in FSEZ",
    "Contact the Development Commissioner",
    "Know about ready-to-build space available in FSEZ",
];
if (!$c_reason || !in_array($c_reason, $allowed_reasons, true)) {
    $errors[] = "Please select a valid reason for visit.";
}
if (!$c_message || strlen($c_message) > 5000) {
    $errors[] = "Please enter a message (max 5000 characters).";
}

if (!empty($errors)) {
    echo json_encode([
        "status"  => "error",
        "message" => implode(" ", $errors),
    ]);
    exit();
}

/* ── Capture submitter IP safely ── */
$c_ip = $_SERVER["HTTP_CLIENT_IP"]
     ?? $_SERVER["HTTP_X_FORWARDED_FOR"]
     ?? $_SERVER["REMOTE_ADDR"]
     ?? "";
$c_ip = filter_var(explode(",", $c_ip)[0], FILTER_VALIDATE_IP) ?: "";

/* ── Prepared statement INSERT ── */
$stmt = $con->prepare(
    "INSERT INTO fsez_contact_enquiries
     (name, email, phone, reason, message, ip_address, submitted_on)
     VALUES (?, ?, ?, ?, ?, ?, NOW())"
);

if (!$stmt) {
    echo json_encode([
        "status"  => "error",
        "message" => "A server error occurred. Please try again later.",
    ]);
    exit();
}

$stmt->bind_param(
    "ssssss",
    $c_name, $c_email, $c_phone,
    $c_reason, $c_message, $c_ip
);

if ($stmt->execute()) {
    echo json_encode([
        "status"  => "success",
        "message" => "Thank you, {$c_name}! Your enquiry has been received. We will get back to you shortly.",
    ]);
} else {
    echo json_encode([
        "status"  => "error",
        "message" => "We could not save your message due to a server error. Please try again.",
    ]);
}

$stmt->close();
