<?php
include("application-top.php");

$docRows = array(
    array("title" => "ANF-6A - Application form for setting up of a new EOU / EHTP / STP / BTP unit, or conversion of an existing DTA / EHTP / STP / BTP unit", "file" => "1-APPLICATION-FORM-FOR-SETTING-UP-OF-NEW-EOUEHTPSTPBTP-UNIT-OR-CONVERSION-OF-EXISTING-DTA-EHTP-STPBTP-UNIT.pdf"),
    array("title" => "Appendix-6D - Format for letter of permission", "file" => "2-FORMAT-FOR-LETTER-OF-PERMISSION.pdf"),
    array("title" => "Appendix-6E - Form of legal agreement for EOU / EHTP / STP / BTP", "file" => "3-FORM-OF-LEGAL-AGREEMENT-FOR-EOUEHTPSTPBTP.pdf"),
    array("title" => "Annexure-III - Format for quarterly report for the working units", "file" => "4-FORMAT-FOR-QPR-APR-REPORT-FOR-THE-WORKING-UNITS.pdf"),
    array("title" => "Appendix-6A - Criteria to be adopted for automatic approval of units under the EOU scheme", "file" => "5-CRITERIA-TO-BE-ADOPTED-FOR-AUTOMATIC-APPROVAL-OF-UNITS-UNDER-EOU-SCHEME.pdf"),
    array("title" => "Appendix-6B - Sector specific requirements for EOUs", "file" => "6-SECTOR-SPECIFIC-REQUIREMENTS-FOR-EOUs.pdf"),
    array("title" => "ANF-6C - Application for DTA sale / advance DTA sale permission", "file" => "7-APPLICATION-FOR-DTA-SALE-ADVANCE-DTA-SALE-PERMISSION.pdf"),
    array("title" => "ANF-6D - Application for exit from the EOU / EHTP / STP / BTP scheme", "file" => "8-APPLICATION-FOR-EXIT-FROM-EOU-EHTP-STP-BTP-SCHEME.pdf"),
);

$docTitle = "EOU Forms";
$docHeading = "EOU Forms";
$docHeadingHtml = "EOU <span>Forms</span>";
$docMeta = "Export Oriented Unit (EOU) forms, applications and annexures.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Forms", "href" => "sez-forms.php"),
    array("label" => "EOU Forms", "href" => "eou-forms.php"),
);
$docIntro = "Forms, applications and annexures for Export Oriented Units (EOU), EHTP, STP and BTP units.";
$docTabs = array(
    array("label" => "SEZ Forms", "href" => "sez-forms.php"),
    array("label" => "EOU Forms", "href" => "eou-forms.php", "current" => true),
);
$docCaption = "List of EOU forms and applications";
$docColTitle = "Form / Application / Annexure";
$docShowDate = false;
$docTitleCol = "title";
$docFileCol = "file";
$docFolder = "repo/eou_forms";
$docEmpty = "No EOU form is available at present.";

include("includes/doc-list-page.php");
