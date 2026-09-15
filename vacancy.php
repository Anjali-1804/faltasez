<?php
include("application-top.php");

$vsql = "select * from fsez_vacancies where added_on >= CURDATE() - INTERVAL 12 MONTH AND CURDATE() and status = 1 order by added_on desc";
$vres = mysqli_query($con, $vsql);
$docRows = array();
if ($vres) {
    while ($vrow = mysqli_fetch_assoc($vres)) {
        $docRows[] = $vrow;
    }
}

$docTitle = "Vacancies";
$docHeading = "FSEZ Vacancies";
$docHeadingHtml = "FSEZ <span>Vacancies</span>";
$docMeta = "Vacancy notifications issued by Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Vacancies", "href" => "vacancy.php"),
);
$docIntro = "Vacancy notifications issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months.";
$docTabs = array(
    array("label" => "Vacancies", "href" => "vacancy.php", "current" => true),
    array("label" => "Archive", "href" => "archieve.php?type=vacancy"),
);
$docCaption = "List of vacancy notifications";
$docColTitle = "Vacancy notification";
$docTitleCol = "vacancy_name";
$docFileCol = "vacancy_file_name";
$docFolder = "admin/upload_vacancy_documents";
$docEmpty = "No vacancy is available at present.";

include("includes/doc-list-page.php");
