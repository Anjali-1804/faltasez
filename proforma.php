<?php
include("application-top.php");
$proseTitle = "Proforma";
$proseHeading = "<span>Proforma</span>";
$proseMeta = "Where to find SEZ and EOU forms and proformas published by Falta Special Economic Zone.";
$proseBody = <<<'HTML'
<p>There is no separate proforma list on this address. Application forms and notices are published on the Forms pages, not as an unfinished placeholder.</p>
<p>Use these pages:</p>
<ul>
<li><a href="sez-forms.php">SEZ Forms</a></li>
<li><a href="eou-forms.php">EOU Forms</a></li>
<li><a href="download-forms.php">Download forms</a></li>
<li><a href="forms-and-notices.php">Forms and notices</a></li>
<li><a href="uac-meeting-agenda.php">UAC meeting agenda</a></li>
</ul>
<p>If a specific proforma is not listed, email <a href="mailto:fsez@nic.in">fsez@nic.in</a>.</p>
HTML;
include("includes/gov-prose-page.php");
