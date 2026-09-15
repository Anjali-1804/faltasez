<?php
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(array("status" => "error", "message" => "Method not allowed."));
    exit;
}

$raw = file_get_contents("php://input");
$data = json_decode($raw, true);
$lang = isset($data["lang"]) ? $data["lang"] : "";
$texts = isset($data["texts"]) && is_array($data["texts"]) ? $data["texts"] : array();

$allowed = array("hi" => "hi", "bn" => "bn");
if (!isset($allowed[$lang])) {
    echo json_encode(array("status" => "error", "message" => "Unsupported language."));
    exit;
}

if (count($texts) === 0 || count($texts) > 80) {
    echo json_encode(array("status" => "error", "message" => "Invalid text batch."));
    exit;
}

$clean = array();
foreach ($texts as $text) {
    $item = trim(preg_replace('/\s+/u', " ", (string) $text));
    if (strlen($item) > 800) {
        $item = substr($item, 0, 800);
    }
    $clean[] = $item === "" ? " " : $item;
}

function fsez_i18n_dir()
{
    $dir = dirname(__DIR__) . DIRECTORY_SEPARATOR . "storage";
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    return $dir;
}

function fsez_i18n_cache_file($lang)
{
    return fsez_i18n_dir() . DIRECTORY_SEPARATOR . "i18n-" . $lang . ".json";
}

function fsez_i18n_load($lang)
{
    $file = fsez_i18n_cache_file($lang);
    if (!is_file($file)) {
        return array();
    }
    $json = json_decode(file_get_contents($file), true);
    return is_array($json) ? $json : array();
}

function fsez_i18n_save($lang, $map)
{
    $file = fsez_i18n_cache_file($lang);
    $fp = fopen($file, "c+");
    if (!$fp) {
        return;
    }
    if (!flock($fp, LOCK_EX)) {
        fclose($fp);
        return;
    }
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($map, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
}

function fsez_curl_get($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
    $out = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($code < 200 || $code >= 300 || $out === false) {
        return null;
    }
    return $out;
}

function fsez_gtx($text, $lang)
{
    $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=" . rawurlencode($lang) . "&dt=t&q=" . rawurlencode($text);
    $out = fsez_curl_get($url);
    if ($out === null) {
        return null;
    }
    $json = json_decode($out, true);
    if (!is_array($json) || !isset($json[0]) || !is_array($json[0])) {
        return null;
    }
    $acc = "";
    foreach ($json[0] as $row) {
        if (isset($row[0])) {
            $acc .= $row[0];
        }
    }
    $acc = html_entity_decode(trim($acc), ENT_QUOTES, "UTF-8");
    return $acc === "" ? null : $acc;
}

function fsez_mymemory($text, $lang)
{
    $url = "https://api.mymemory.translated.net/get?q=" . rawurlencode($text) . "&langpair=en|" . rawurlencode($lang);
    $out = fsez_curl_get($url);
    if ($out === null) {
        return null;
    }
    $json = json_decode($out, true);
    if (!is_array($json) || empty($json["responseData"]["translatedText"])) {
        return null;
    }
    $acc = html_entity_decode($json["responseData"]["translatedText"], ENT_QUOTES, "UTF-8");
    return trim($acc) === "" ? null : $acc;
}

function fsez_still_english($source, $translated)
{
    if ($translated === null || $translated === "") {
        return true;
    }
    if ($translated === $source) {
        return true;
    }
    return false;
}

function fsez_polish($text, $lang)
{
    if ($text === null || $text === "") {
        return $text;
    }
    if ($lang === "hi") {
        $text = preg_replace('/\bSEZs\b/', "एसईजेड", $text);
        $text = preg_replace('/\bSEZ\b/', "एसईजेड", $text);
        $text = preg_replace('/\bPvt\.?\s*Ltd\.?\b/i', "प्राइवेट लिमिटेड", $text);
        $text = preg_replace('/\bPrivate Limited\b/i', "प्राइवेट लिमिटेड", $text);
        $text = preg_replace('/\bLtd\.?\b/i', "लिमिटेड", $text);
        $text = preg_replace('/\bLimited\b/i', "लिमिटेड", $text);
        $text = preg_replace('/\bIT\/ITES\b/', "आईटी/आईटीईएस", $text);
        $text = preg_replace('/\bITES\b/', "आईटीईएस", $text);
    } elseif ($lang === "bn") {
        $text = preg_replace('/\bSEZs\b/', "এসইজেড", $text);
        $text = preg_replace('/\bSEZ\b/', "এসইজেড", $text);
        $text = preg_replace('/\bPvt\.?\s*Ltd\.?\b/i', "প্রাইভেট লিমিটেড", $text);
        $text = preg_replace('/\bPrivate Limited\b/i', "প্রাইভেট লিমিটেড", $text);
        $text = preg_replace('/\bLtd\.?\b/i', "লিমিটেড", $text);
        $text = preg_replace('/\bLimited\b/i', "লিমিটেড", $text);
        $text = preg_replace('/\bIT\/ITES\b/', "আইটি/আইটিইএস", $text);
        $text = preg_replace('/\bITES\b/', "আইটিইএস", $text);
    }
    return $text;
}

function fsez_inputtools($text, $lang)
{
    $itc = $lang === "hi" ? "hi-t-i0-und" : "bn-t-i0-und";
    $url = "https://inputtools.google.com/request?text=" . rawurlencode($text)
        . "&itc=" . rawurlencode($itc) . "&num=1&cp=0&cs=1&ie=utf-8&oe=utf-8";
    $out = fsez_curl_get($url);
    if ($out === null) {
        return null;
    }
    $json = json_decode($out, true);
    if (!is_array($json) || !isset($json[0]) || $json[0] !== "SUCCESS") {
        return null;
    }
    if (empty($json[1][0][1][0])) {
        return null;
    }
    return trim($json[1][0][1][0]);
}

function fsez_translate_one($text, $lang)
{
    $hit = fsez_gtx($text, $lang);
    if (!fsez_still_english($text, $hit)) {
        return fsez_polish($hit, $lang);
    }
    $hit = fsez_mymemory($text, $lang);
    if (!fsez_still_english($text, $hit)) {
        return fsez_polish($hit, $lang);
    }
    if (strlen($text) <= 180) {
        $hit = fsez_inputtools($text, $lang);
        if (!fsez_still_english($text, $hit)) {
            return fsez_polish($hit, $lang);
        }
    }
    $polished = fsez_polish($text, $lang);
    if ($polished !== $text) {
        return $polished;
    }
    return null;
}

$cache = fsez_i18n_load($lang);
$out = array();
$dirty = false;

foreach ($clean as $item) {
    if (isset($cache[$item]) && $cache[$item] !== "") {
        $out[] = fsez_polish($cache[$item], $lang);
        continue;
    }
    $translated = fsez_translate_one($item, $lang);
    if ($translated === null) {
        $out[] = $item;
        continue;
    }
    $cache[$item] = $translated;
    $dirty = true;
    $out[] = $translated;
}

if ($dirty) {
    fsez_i18n_save($lang, $cache);
}

echo json_encode(array("status" => "ok", "texts" => $out), JSON_UNESCAPED_UNICODE);
