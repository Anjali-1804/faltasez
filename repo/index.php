<?php
$allowed_host = array('https://fsez.gov.in', 'http://fsez.gov.in', 'https://www.fsez.gov.in', 'http://www.fsez.gov.in', 'fsez.gov.in', 'http://10.173.13.47');

if (!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $allowed_host)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    exit;
}