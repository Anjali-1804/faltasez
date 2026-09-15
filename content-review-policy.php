<?php
include("application-top.php");
$proseTitle = "Content Review Policy";
$proseHeading = "Content <span>Review Policy</span>";
$proseMeta = "How often content on the Falta SEZ website is reviewed for accuracy.";
$proseBody = <<<'HTML'
<p>This Content Review Policy (CRP) sets the intervals at which content on this website is checked so that it remains accurate, relevant and current.</p>
<table class="table table-bordered">
<caption>Review intervals for the main types of content on this website</caption>
<thead>
<tr>
<th scope="col">Content</th>
<th scope="col">Review interval</th>
</tr>
</thead>
<tbody>
<tr><td>Home page, contact details and organisational information</td><td>Whenever a change occurs, and in any case every three months</td></tr>
<tr><td>News and departmental updates</td><td>Daily on working days</td></tr>
<tr><td>Circulars, tenders, vacancies and public notices</td><td>As soon as they are issued or withdrawn</td></tr>
<tr><td>Meeting agenda and minutes</td><td>As soon as they are approved for publication</td></tr>
<tr><td>Policies, help and accessibility pages</td><td>At least once a year</td></tr>
<tr><td>Forms and downloadable documents</td><td>Whenever a revised version is issued</td></tr>
</tbody>
</table>
<p>The Web Information Manager is responsible for seeing that these reviews take place. Content that has passed its review date is either updated, moved to the archive or removed.</p>
HTML;
include("includes/gov-prose-page.php");
