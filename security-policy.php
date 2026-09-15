<?php
include("application-top.php");
$proseTitle = "Security Policy";
$proseHeading = "Security <span>Policy</span>";
$proseMeta = "Security policy for the Falta Special Economic Zone website.";
$proseBody = <<<'HTML'
<p>This security policy describes how the Falta Special Economic Zone website is protected so that information remains confidential, accurate and available to the public.</p>
<h2>Hosting and access</h2>
<ul>
<li>The website is hosted in a controlled environment. Administrative access is limited to authorised officers of this office and the development team acting on their instructions.</li>
<li>Passwords and other credentials are not stored in public source files. They are held by the officers who need them for their work.</li>
<li>The site is served over HTTPS. Security headers restrict framing, mixed content and untrusted scripts.</li>
</ul>
<h2>Content and data</h2>
<ul>
<li>Personal information received through the feedback or contact forms is used only to respond to the sender, as set out in the <a href="privacy-policy.php">Privacy Policy</a>.</li>
<li>Citizens’ grievances are handled through the departmental process and are not forwarded to personal email accounts.</li>
<li>Downloadable documents are published from the official document store of this office.</li>
</ul>
<h2>Audit and incidents</h2>
<ul>
<li>The website is to be security-audited, and hosted in production only after a “safe to host” clearance from NIC, STQC or a CERT-In empanelled laboratory, as required by GIGW 3.0.</li>
<li>If a security incident is suspected, the Web Information Manager will isolate the affected service, inform the hosting provider and CERT-In as required, restore from a known-good backup and record the incident.</li>
</ul>
<h2>Review</h2>
<p>This policy is reviewed at least once a year, or sooner if the hosting arrangement or the threat environment changes.</p>
HTML;
include("includes/gov-prose-page.php");
