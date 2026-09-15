<?php
include("application-top.php");

$agsql = "select * from fsez_auth_agendas where status = 1 order by added_on desc";
$agres = mysqli_query($con, $agsql);
$docRows = array();
if ($agres) {
    while ($agrow = mysqli_fetch_assoc($agres)) {
        $docRows[] = $agrow;
    }
}

$docTitle = "Authority Meeting Agenda";
$docHeading = "Authority Meeting Agenda";
$docHeadingHtml = "Authority <span>Meeting Agenda</span>";
$docMeta = "Agenda of the Falta Special Economic Zone Authority meetings.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Authority", "href" => "falta-sez-authority.php"),
    array("label" => "Authority Meeting Agenda", "href" => "authority-meeting-agenda.php"),
);
$docIntro = "Agendas of the Falta Special Economic Zone Authority meetings.";
$docTabs = array(
    array("label" => "Agenda", "href" => "authority-meeting-agenda.php", "current" => true),
    array("label" => "Minutes", "href" => "authority-meeting-minutes.php"),
);
$docCaption = "List of authority meeting agenda documents";
$docColTitle = "Authority Meeting Agenda";
$docTitleCol = "auth_agenda_title";
$docFileCol = "auth_agenda_file";
$docFolder = "admin/upload_authority_agenda_documents";
$docEmpty = "No authority meeting agenda is available at present.";

include("includes/doc-list-page.php");
