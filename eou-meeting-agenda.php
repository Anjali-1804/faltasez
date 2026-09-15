<?php
include("application-top.php");

$easql = "select * from fsez_eou_agendas where status = 1 order by added_on desc";
$eares = mysqli_query($con, $easql);
$docRows = array();
if ($eares) {
    while ($earow = mysqli_fetch_assoc($eares)) {
        $docRows[] = $earow;
    }
}

$docTitle = "EOU Meeting Agenda";
$docHeading = "EOU Meeting Agenda";
$docHeadingHtml = "EOU <span>Meeting Agenda</span>";
$docMeta = "Export Oriented Unit (EOU) meeting agenda of Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "EOU", "href" => "eou-meeting-agenda.php"),
    array("label" => "EOU Meeting Agenda", "href" => "eou-meeting-agenda.php"),
);
$docIntro = "Agendas of the Export Oriented Unit (EOU) meetings held under the Office of the Development Commissioner, Falta SEZ.";
$docTabs = array(
    array("label" => "Agenda", "href" => "eou-meeting-agenda.php", "current" => true),
    array("label" => "Minutes", "href" => "eou-meeting-minutes.php"),
);
$docCaption = "List of EOU meeting agenda documents";
$docColTitle = "EOU Meeting Agenda";
$docTitleCol = "eou_agenda_title";
$docFileCol = "eou_agenda_file";
$docFolder = "admin/upload_eou_agenda_documents";
$docEmpty = "No EOU meeting agenda is available at present.";

include("includes/doc-list-page.php");
