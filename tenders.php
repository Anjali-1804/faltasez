<?php
include("application-top.php");

$tsql = "select * from fsez_tenders where added_on >= CURDATE() - INTERVAL 12 MONTH and status = 1 order by added_on desc";
$tres = mysqli_query($con, $tsql);
$docRows = array();
if ($tres) {
    while ($trow = mysqli_fetch_assoc($tres)) {
        $docRows[] = $trow;
    }
}

$docTitle = "Tenders";
$docHeading = "FSEZ Tenders";
$docHeadingHtml = "FSEZ <span>Tenders</span>";
$docMeta = "Tenders and notices issued by Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Tenders", "href" => "tenders.php"),
);
$docIntro = "Tenders and notices issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months.";
$docTabs = array(
    array("label" => "Tenders", "href" => "tenders.php", "current" => true),
    array("label" => "Archive", "href" => "archieve.php?type=tender"),
);
$docCaption = "List of tenders and notices";
$docColTitle = "Tender / Notice";
$docTitleCol = "tender_name";
$docFileCol = "tender_file_name";
$docFolder = "admin/upload_tender_documents";
$docEmpty = "No tender is available at present.";

include("includes/doc-list-page.php");
