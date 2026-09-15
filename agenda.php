<?php
include("application-top.php");

$docRows = array(
    array("title" => "Agenda for 33rd FSEZ Authority Meeting (2019-20)", "file" => "Agenda for 33rd Authority Meeting.pdf"),
);

$docTitle = "FSEZ Agenda";
$docHeading = "FSEZ Agenda";
$docHeadingHtml = "FSEZ <span>Agenda</span>";
$docMeta = "Agenda documents of Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Agenda", "href" => "agenda.php"),
);
$docIntro = "Agenda documents of the Falta Special Economic Zone Authority.";
$docCaption = "List of FSEZ agenda documents";
$docColTitle = "Particulars";
$docShowDate = false;
$docTitleCol = "title";
$docFileCol = "file";
$docFolder = "repo/agenda";
$docEmpty = "No agenda is available at present.";

include("includes/doc-list-page.php");
