<?php
/**
 * Regenerates sitemap.xml from includes/sitemap-data.php.
 *
 * Run from the site root after adding or removing a page:
 *   php tools/build-sitemap-xml.php
 */
$base = "https://fsez.gov.in/";
$root = dirname(__DIR__);
$sections = include($root . "/includes/sitemap-data.php");

$urls = array("");
foreach ($sections as $links) {
    foreach ($links as $link) {
        $urls[] = $link[1];
    }
}
$urls = array_values(array_unique($urls));

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $path) {
    $file = $root . "/" . preg_replace('/\?.*$/', "", $path);
    $stamp = ($path !== "" && is_file($file)) ? filemtime($file) : time();
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($base . $path, ENT_QUOTES) . "</loc>\n";
    $xml .= "    <lastmod>" . date("Y-m-d", $stamp) . "</lastmod>\n";
    $xml .= "    <changefreq>" . ($path === "" ? "weekly" : "monthly") . "</changefreq>\n";
    $xml .= "  </url>\n";
}
$xml .= "</urlset>\n";

file_put_contents($root . "/sitemap.xml", $xml);
echo "Wrote sitemap.xml with " . count($urls) . " URLs\n";
