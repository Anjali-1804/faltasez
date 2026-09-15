<?php
include("application-top.php");
$proseTitle = "Website Monitoring Plan";
$proseHeading = "Website <span>Monitoring Plan</span>";
$proseMeta = "How the Falta SEZ website is monitored for quality, links and availability.";
$proseBody = <<<'HTML'
<p>This plan describes how the Office of the Development Commissioner monitors the Falta SEZ website so that it stays available, accurate and free of broken links.</p>
<h2>What is monitored</h2>
<ul>
<li>Home page and the main landing pages load without error.</li>
<li>Internal and external links are not broken and do not lead to “under construction” pages.</li>
<li>Downloadable files open, and their titles, formats and sizes remain correct.</li>
<li>The feedback form and search return a working response.</li>
<li>The last-updated date in the footer reflects recent changes to the site.</li>
</ul>
<h2>How often</h2>
<ul>
<li>Availability: the hosting environment is watched continuously.</li>
<li>Broken links: a full crawl is run at least once a month, and after any large content change. The records of that crawl are kept for the GIGW evaluator.</li>
<li>Content currency: in line with the <a href="content-review-policy.php">Content Review Policy</a>.</li>
</ul>
<h2>Who acts on the findings</h2>
<p>The website team reports defects to the Web Information Manager. Broken links and expired notices are corrected as soon as they are found. A log of checks and corrections is maintained in the office.</p>
HTML;
include("includes/gov-prose-page.php");
