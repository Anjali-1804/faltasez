<?php
include("application-top.php");
$proseTitle = "Content Archival Policy";
$proseHeading = "Content <span>Archival Policy</span>";
$proseMeta = "How expired or withdrawn content is archived on the Falta SEZ website.";
$proseBody = <<<'HTML'
<p>This Content Archival Policy (CAP) explains when information is moved off the current pages of this website and what happens to it afterwards.</p>
<h2>What is archived</h2>
<ul>
<li>Tenders, vacancies, public notices and similar time-bound documents are moved to the archive when their validity expires or they are withdrawn.</li>
<li>Circulars, meeting agenda and minutes that are more than twelve months old are listed on the archive pages linked from the current listing.</li>
<li>News items that are no longer current remain available from the archive or from the original listing if they still have public value.</li>
</ul>
<h2>How long records are kept</h2>
<ul>
<li>Archived documents remain on this website for at least three years unless a court, statute or departmental instruction requires a longer period.</li>
<li>After that period they may be expunged from the public website. A departmental copy is kept according to the record-retention rules of the Government of India.</li>
</ul>
<h2>How to find archived content</h2>
<p>Each current listing of circulars, tenders, vacancies, forms and meeting papers includes a link to its archive. If you cannot find a document, write to us through the <a href="feedback.php">feedback form</a> or <a href="contact.php">Contact us</a>.</p>
HTML;
include("includes/gov-prose-page.php");
