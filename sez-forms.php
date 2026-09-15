<?php
include("application-top.php");

$docRows = array(
    array("title" => "Form A - Application for setting up of Special Economic Zone", "file" => "1-Application-for-setting-up-of-SEZ-Form-A.pdf"),
    array("title" => "Form A1 - Application form for approval of Co-Developer", "file" => "2-Application-for-approval-of-Co-Developer-Form_A1.pdf"),
    array("title" => "Form B - Format for letter of approval for SEZ Developer", "file" => "3-Format-for-LOA-for-SEZ-Developer-Form-B.pdf"),
    array("title" => "Form B1 - Communication regarding LoA to SEZ Developer", "file" => "4-Communication-regarding-LoA-to-SEZ-Developer.pdf"),
    array("title" => "Form C - Format for letter of approval for providing infrastructure facilities in SEZ", "file" => "5-Format-for-LoA-for-providing-infrastructure-facilities-in-SEZ-Form-C.pdf"),
    array("title" => "Form C1 - Application for extension of validity of approval granted under Rule 6(2)(a)", "file" => "6-Application-for-extension-of-validity-of-approval-granted-Form-C1.pdf"),
    array("title" => "Form C2 - Application for extension of validity of approval granted under Rule 6(2)(b)", "file" => "7-Application-for-extension-of-validity-of-approval-granted-Form-C2.pdf"),
    array("title" => "Form C3 - Application for seeking change in sector", "file" => "8-Application-for-seeking-change-in-sector-Form-C3.pdf"),
    array("title" => "Form C4 - Application for increase in area", "file" => "9-Application-for-increase-in-Area-Form-C4.pdf"),
    array("title" => "Form C5 - Application for decrease in area", "file" => "10-Application-for-decrease-in-Area-Form-C5.pdf"),
    array("title" => "Form C6 - Application form for de-notification", "file" => "11-Application-for-de-notification-Form-C6.pdf"),
    array("title" => "Form C7 - Application for approval of authorised operations", "file" => "12-Application-for-approval-of-Authorised-operations-Form-C7.pdf"),
    array("title" => "Form D - Bond-cum-Legal Undertaking for Developer", "file" => "13-BOND-CUM-LEGAL-UNDERTAKING-FOR-DEVELOPER-FORM-D.pdf"),
    array("title" => "Form E - Format for quarterly and half-yearly report for SEZ Developer / Co-Developer to be furnished to the Development Commissioner", "file" => "14-Format-for-Quarterly-and-Half-yearly-report-for-SEZ-Developer-Co-developer-FORM-E.pdf"),
    array("title" => "Form F - Consolidated application form for setting up an SEZ unit", "file" => "15-Consolidated-form-for-setting-up-of-SEZ-unit-FORM-F.pdf"),
    array("title" => "Form F1 - Letter of approval renewal application form", "file" => "16-LoA-renewal-application-form-F-1.pdf"),
    array("title" => "Form F2 - Format for renewal of letter of approval for unit", "file" => "17-Format-conveying-renewal-of-LoA-for-Unit-F2.pdf"),
    array("title" => "Form G - Format for letter of approval for unit", "file" => "18-Format-for-LoA-for-Unit-Form-G.pdf"),
    array("title" => "Form H - Bond-cum-Legal Undertaking for Special Economic Zone unit", "file" => "19-BOND-CUM-LEGAL-UNDERTAKING-FOR-SPECIAL-ECONOMIC-ZONE-UNIT-Form-H.pdf"),
    array("title" => "Form I - Annual performance report for units", "file" => "20-APR-for-Units-FORM-I-1.pdf"),
    array("title" => "Form J - Form for appeal", "file" => "21-Form-for-Appeal-FORM_-J.pdf"),
    array("title" => "Form K - Permanent identity card", "file" => "22-Permanent-Identity-Card-form-FORM-K.pdf"),
    array("title" => "Form L - Form of legal undertaking for exit of the unit from the Special Economic Zone scheme", "file" => "23-Form-for-Legal-underetaking-for-exit-of-the-unit-from-the-SEZ-scheme-Form-L.pdf"),
);

$docTitle = "SEZ Forms";
$docHeading = "SEZ Forms";
$docHeadingHtml = "SEZ <span>Forms</span>";
$docMeta = "Special Economic Zone forms, applications and annexures under the SEZ Rules, 2006.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Forms", "href" => "sez-forms.php"),
    array("label" => "SEZ Forms", "href" => "sez-forms.php"),
);
$docIntro = "Forms, applications and annexures prescribed under the Special Economic Zones Rules, 2006.";
$docTabs = array(
    array("label" => "SEZ Forms", "href" => "sez-forms.php", "current" => true),
    array("label" => "EOU Forms", "href" => "eou-forms.php"),
);
$docCaption = "List of SEZ forms and applications";
$docColTitle = "Form / Application / Annexure";
$docShowDate = false;
$docTitleCol = "title";
$docFileCol = "file";
$docFolder = "repo/sez_forms";
$docEmpty = "No SEZ form is available at present.";

include("includes/doc-list-page.php");
