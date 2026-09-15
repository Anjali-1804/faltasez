<?php
include("application-top.php");

$ucsql = "select * from fsez_uac_agendas where status = 1 order by STR_TO_DATE(date_of_issue, '%d-%m-%Y') desc";
$ucres = mysqli_query($con, $ucsql);
$docRows = array();
if ($ucres) {
    while ($ucrow = mysqli_fetch_assoc($ucres)) {
        $docRows[] = $ucrow;
    }
}

$docTitle = "UAC Meeting Agenda";
$docHeading = "UAC Meeting Agenda";
$docHeadingHtml = "UAC <span>Meeting Agenda</span>";
$docMeta = "Unit Approval Committee meeting agenda of Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "UAC", "href" => "uac-meeting-agenda.php"),
    array("label" => "UAC Meeting Agenda", "href" => "uac-meeting-agenda.php"),
);
$docIntro = "Agendas of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.";
$docTabs = array(
    array("label" => "Agenda", "href" => "uac-meeting-agenda.php", "current" => true),
    array("label" => "Minutes", "href" => "uac-meeting-minutes.php"),
);
$docCaption = "List of UAC meeting agenda documents";
$docColTitle = "UAC Meeting Agenda";
$docTitleCol = "uac_agenda_title";
$docFileCol = "uac_agenda_file";
$docFolder = "admin/upload_uac_agenda_documents";
$docEmpty = "No UAC meeting agenda is available at present.";

include("includes/doc-list-page.php");
