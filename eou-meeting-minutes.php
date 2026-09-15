<?php
include("application-top.php");

$emsql = "select * from fsez_eou_meetings where status = 1 order by added_on desc";
$emres = mysqli_query($con, $emsql);
$docRows = array();
if ($emres) {
    while ($emrow = mysqli_fetch_assoc($emres)) {
        $docRows[] = $emrow;
    }
}

$docTitle = "EOU Meeting Minutes";
$docHeading = "EOU Meeting Minutes";
$docHeadingHtml = "EOU <span>Meeting Minutes</span>";
$docMeta = "Export Oriented Unit (EOU) meeting minutes of Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "EOU", "href" => "eou-meeting-agenda.php"),
    array("label" => "EOU Meeting Minutes", "href" => "eou-meeting-minutes.php"),
);
$docIntro = "Minutes of the Export Oriented Unit (EOU) meetings held under the Office of the Development Commissioner, Falta SEZ.";
$docTabs = array(
    array("label" => "Agenda", "href" => "eou-meeting-agenda.php"),
    array("label" => "Minutes", "href" => "eou-meeting-minutes.php", "current" => true),
);
$docCaption = "List of EOU meeting minutes documents";
$docColTitle = "EOU Meeting Minutes";
$docTitleCol = "eou_meeting_title";
$docFileCol = "eou_meeting_file";
$docFolder = "admin/upload_eou_meeting_documents";
$docEmpty = "No EOU meeting minutes are available at present.";

include("includes/doc-list-page.php");
