<?php
include("application-top.php");

$fsql = "select * from fsez_forms where added_on >= CURDATE() - INTERVAL 12 MONTH and status = 1 order by added_on desc";
$fres = mysqli_query($con, $fsql);
$docRows = array();
if ($fres) {
    while ($frow = mysqli_fetch_assoc($fres)) {
        $docRows[] = $frow;
    }
}

$docTitle = "Forms & Notices";
$docHeading = "FSEZ Forms and Notices";
$docHeadingHtml = "FSEZ <span>Forms &amp; Notices</span>";
$docMeta = "Forms, notices and instructions issued by Falta Special Economic Zone.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Forms &amp; Notices", "href" => "forms-and-notices.php"),
);
$docIntro = "Forms, notices and instructions issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months.";
$docTabs = array(
    array("label" => "Forms & Notices", "href" => "forms-and-notices.php", "current" => true),
    array("label" => "Archive", "href" => "archieve.php?type=form"),
);
$docCaption = "List of forms, notices and instructions";
$docColTitle = "Forms / Notices / Instructions";
$docShowDate = false;
$docTitleCol = "form_name";
$docFileCol = "form_file_name";
$docFolder = "admin/upload_form_documents";
$docEmpty = "No form or notice is available at present.";

include("includes/doc-list-page.php");
