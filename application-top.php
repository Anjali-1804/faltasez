<?php
header('X-Content-Type-Options: nosniff');
$host_no_port = strtolower(explode(':', $_SERVER['HTTP_HOST'] ?? '')[0]);
$is_local = in_array($host_no_port, array('localhost', '127.0.0.1', '::1'), true);
$csp = "default-src 'self'; " .
    "script-src 'self' 'unsafe-inline'; " .
    "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; " .
    "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; " .
    "img-src 'self' data: https:; " .
    "media-src 'self' https:; " .
    "frame-src 'self' https://www.google.com https://maps.google.com; " .
    "connect-src 'self'; " .
    "object-src 'self'";
if (!$is_local) {
    $csp .= "; upgrade-insecure-requests";
}
header("Content-Security-Policy: $csp");
header('Cache-Control: no-cache,no-store,must-revalidate');
header('Pragma: no-cache');
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Frame-Options: DENY");

// --- CORS: reflect only trusted origins instead of '*' ---
$allowed_origins = array(
    'https://fsez.gov.in',
    'http://fsez.gov.in',
    'https://www.fsez.gov.in',
    'http://www.fsez.gov.in',
    'http://localhost',
    'http://127.0.0.1'
);
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
    header('Vary: Origin');
    header('Access-Control-Allow-Credentials: true');
}

// Handle preflight requests early, before DB connection
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
    http_response_code(200);
    exit();
}

ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', $is_local ? 0 : 1);
include("includes/connection.php");
include("includes/function.php");

$allowed_host = array('fsez.gov.in', 'www.fsez.gov.in', '10.192.147.2', 'localhost', '127.0.0.1');
if (!isset($_SERVER['HTTP_HOST']) || (!in_array($_SERVER['HTTP_HOST'], $allowed_host) && !in_array($host_no_port, $allowed_host))) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    exit;
}

define("ABS_PATH", $is_local ? ("http://" . $_SERVER['HTTP_HOST'] . "/fsez/") : "https://fsez.gov.in/");

$gbl_sql = "select * from fsez_global_settings where setting_id = 1";
$gbl_res = mysqli_query($con, $gbl_sql);
if ($gbl_res) {
    $gbl_row = mysqli_fetch_array($gbl_res);
}
