<?php
include("application-top.php");

$uasql = "select * from fsez_uac_meetings where status = 1 order by STR_TO_DATE(date_of_issue, '%d-%m-%Y') desc";
$uares = mysqli_query($con, $uasql);
$docRows = array();
if ($uares) {
    while ($uarow = mysqli_fetch_assoc($uares)) {
        $docRows[] = $uarow;
    }
}

$docTitle = "UAC Meeting Minutes";
$docHeading = "UAC Meeting Minutes";
$docHeadingHtml = "UAC <span>Meeting Minutes</span>";
$docMeta = "Unit Approval Committee meeting minutes of Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "UAC", "href" => "uac-meeting-agenda.php"),
    array("label" => "UAC Meeting Minutes", "href" => "uac-meeting-minutes.php"),
);
$docIntro = "Minutes of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.";
$docTabs = array(
    array("label" => "Agenda", "href" => "uac-meeting-agenda.php"),
    array("label" => "Minutes", "href" => "uac-meeting-minutes.php", "current" => true),
);
$docCaption = "List of UAC meeting minutes documents";
$docColTitle = "UAC Meeting Minutes";
$docTitleCol = "uac_meeting_title";
$docFileCol = "uac_meeting_file";
$docFolder = "admin/upload_uac_meeting_documents";
$docEmpty = "No UAC meeting minutes are available at present.";

include("includes/doc-list-page.php");
