<?php
include("application-top.php");
$proseTitle = "Content Contribution, Moderation and Approval Policy";
$proseHeading = "Content <span>Moderation Policy</span>";
$proseMeta = "How content is contributed, moderated and approved on the Falta SEZ website.";
$proseBody = <<<'HTML'
<p>This Content Contribution, Moderation and Approval (CMAP) policy sets out who may add content to this website and how that content is checked before it is published.</p>
<h2>Who may contribute</h2>
<ul>
<li>Content is contributed only by officers of the Office of the Development Commissioner, Falta SEZ, or by the website team acting on written instructions from those officers.</li>
<li>Citizens cannot post content directly. Feedback and queries are received through forms and are not published as website content unless the office decides to do so.</li>
</ul>
<h2>Moderation and approval</h2>
<ul>
<li>Every new page, notice, circular, tender, vacancy, form and gallery item is checked for accuracy, completeness, language and the absence of offensive or discriminatory wording before it is published.</li>
<li>The contributing officer is responsible for the facts. The Web Information Manager, or an officer authorised by the WIM, approves publication.</li>
<li>Documents that are scans of signed originals are published as received, with a title, date and file format shown on the listing page.</li>
</ul>
<h2>Changes after publication</h2>
<p>Corrections are made as soon as an error is found. Withdrawn notices are removed from the current listing and, where they still have legal or historical value, moved to the archive in line with the <a href="content-archival-policy.php">Content Archival Policy</a>.</p>
HTML;
include("includes/gov-prose-page.php");
