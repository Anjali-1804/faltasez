<?php
include("application-top.php");

$amsql = "select * from fsez_auth_meetings where added_on >= CURDATE() - INTERVAL 6 MONTH and status = 1 order by added_on desc";
$amres = mysqli_query($con, $amsql);
$docRows = array();
if ($amres) {
    while ($amrow = mysqli_fetch_assoc($amres)) {
        $docRows[] = $amrow;
    }
}

$docTitle = "Authority Meeting Minutes";
$docHeading = "Authority Meeting Minutes";
$docHeadingHtml = "Authority <span>Meeting Minutes</span>";
$docMeta = "Minutes of the Falta Special Economic Zone Authority meetings.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Authority", "href" => "falta-sez-authority.php"),
    array("label" => "Authority Meeting Minutes", "href" => "authority-meeting-minutes.php"),
);
$docIntro = "Minutes of the Falta Special Economic Zone Authority meetings held in the last 6 months.";
$docTabs = array(
    array("label" => "Agenda", "href" => "authority-meeting-agenda.php"),
    array("label" => "Minutes", "href" => "authority-meeting-minutes.php", "current" => true),
);
$docCaption = "List of authority meeting minutes documents";
$docColTitle = "Authority Meeting Minutes";
$docTitleCol = "auth_meeting_title";
$docFileCol = "auth_meeting_file";
$docFolder = "admin/upload_authority_meeting_documents";
$docEmpty = "No authority meeting minutes are available at present.";

include("includes/doc-list-page.php");
