<?php
include("application-top.php");

$csql = "select * from fsez_circulars where added_on >= CURDATE() - INTERVAL 12 MONTH and status = 1 order by added_on desc";
$cres = mysqli_query($con, $csql);
$docRows = array();
if ($cres) {
    while ($crow = mysqli_fetch_assoc($cres)) {
        $docRows[] = $crow;
    }
}

$docTitle = "Circulars & Policies";
$docHeading = "Circulars and Policies";
$docHeadingHtml = "Circulars <span>&amp; Policies</span>";
$docMeta = "Circulars and policies issued by Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Circulars & Policies", "href" => "circulars-and-policies.php"),
);
$docIntro = 'Circulars issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months. Policies issued by DGFT and the Department of Commerce are listed under <a href="other-policies.php">Other Policies</a>.';
$docTabs = array(
    array("label" => "Circulars", "href" => "circulars-and-policies.php", "current" => true),
    array("label" => "Other Policies", "href" => "other-policies.php"),
);
$docCaption = "List of circulars and policies";
$docColTitle = "Circular / Policy Name";
$docTitleCol = "circular_name";
$docFileCol = "circular_file_name";
$docFolder = "admin/upload_circular_documents";
$docEmpty = "No circular is available at present.";
$docActions = array(
    array("label" => "Go to Archive", "href" => "archieve.php?type=circular"),
);

include("includes/doc-list-page.php");
