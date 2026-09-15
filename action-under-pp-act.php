<?php
include("application-top.php");
$proseTitle = "Action under PP Act";
$proseHeading = "Action under the <span>Public Premises Act</span>";
$proseMeta = "Where Falta SEZ publishes actions taken under the Public Premises (Eviction of Unauthorised Occupants) Act.";
$proseBody = <<<'HTML'
<p>This office does not keep a separate “under construction” register of Public Premises Act cases on this URL. Orders and notices, when issued, are published with the Authority and public-notice papers.</p>
<p>See:</p>
<ul>
<li><a href="falta-sez-authority.php">Falta SEZ Authority</a></li>
<li><a href="authority-meeting-minutes.php">Authority meeting minutes</a></li>
<li><a href="public-notice.php">Public notices</a></li>
<li><a href="circulars-and-policies.php">Circulars and policies</a></li>
</ul>
<p>For a copy of a specific order, email <a href="mailto:fsez@nic.in">fsez@nic.in</a> or use <a href="right-to-information.php">RTI</a>.</p>
HTML;
include("includes/gov-prose-page.php");
