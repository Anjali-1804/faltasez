<?php
include("application-top.php");
$proseTitle = "Contingency Management Plan";
$proseHeading = "Contingency <span>Management Plan</span>";
$proseMeta = "How the Falta SEZ website is restored if service is interrupted.";
$proseBody = <<<'HTML'
<p>This plan describes what this office will do if the Falta SEZ website cannot be reached, is defaced, or loses data.</p>
<h2>Possible events</h2>
<ul>
<li>The hosting service is down or under maintenance.</li>
<li>The site is defaced or infected.</li>
<li>Files or the database are lost or corrupted.</li>
<li>A natural disaster or civic disruption prevents staff from updating the site.</li>
</ul>
<h2>Immediate action</h2>
<ol>
<li>Confirm the fault and note the time.</li>
<li>Inform the Web Information Manager and the hosting provider.</li>
<li>If the public site is unsafe, take it offline and, where possible, display a short notice that the service will return.</li>
<li>Restore from the latest known-good backup.</li>
<li>Record the incident, the downtime and the steps taken.</li>
</ol>
<h2>Backups and recovery</h2>
<ul>
<li>Website files and the database are backed up on a schedule agreed with the hosting provider. Restoration is tested after any major change.</li>
<li>The target is to restore public information within one working day of a confirmed failure, sooner if a backup is immediately available.</li>
<li>Contact details for this office (phone, email and postal address) remain available through the National Portal and through printed stationery if the website itself is down.</li>
</ul>
HTML;
include("includes/gov-prose-page.php");
