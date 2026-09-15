<?php
/**
 * Shared GIGW 3.0 document listing page.
 *
 * Set these before including:
 *   $docTitle       string  browser title suffix
 *   $docHeadingHtml string  h1 markup, e.g. "FSEZ <span>Tenders</span>"
 *   $docHeading     string  plain heading for aria labels
 *   $docMeta        string  meta description
 *   $docBreadcrumb  array   list of array("label" => , "href" => ) ; last item is current
 *   $docIntro       string  optional intro HTML (already escaped)
 *   $docTabs        array   optional list of array("label" =>, "href" =>, "current" => bool)
 *   $docCaption     string  visible table caption
 *   $docColTitle    string  heading of the title column
 *   $docShowDate    bool    show the date of issue column (default true)
 *   $docRows        array   result rows
 *   $docTitleCol    string  row key for the document title
 *   $docFileCol     string  row key for the file name
 *   $docFolder      string  upload folder, e.g. admin/upload_tender_documents
 *   $docEmpty       string  message when there are no rows
 *   $docActions     array   optional list of array("label" =>, "href" => )
 */

$docShowDate = isset($docShowDate) ? (bool) $docShowDate : true;
$docIntro = isset($docIntro) ? $docIntro : "";
$docTabs = isset($docTabs) ? $docTabs : array();
$docActions = isset($docActions) ? $docActions : array();
$docRows = isset($docRows) ? $docRows : array();
$docMeta = isset($docMeta) ? $docMeta : $docHeading;
$docColCount = $docShowDate ? 4 : 3;
$docKeywords = isset($docKeywords)
    ? $docKeywords
    : "Falta SEZ, FSEZ, " . $docHeading . ", " . $docTitle . ", download";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($docMeta); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($docKeywords); ?>">
    <title><?php echo htmlspecialchars($gbl_row["org_name"]); ?> | <?php echo htmlspecialchars($docTitle); ?></title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper gov-page">
        <?php include("includes/header.php"); ?>

        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb">
                            <?php
                            $lastIndex = count($docBreadcrumb) - 1;
                            foreach ($docBreadcrumb as $index => $crumb) {
                                if ($index === $lastIndex) {
                                    echo '<li aria-current="page">' . htmlspecialchars($crumb["label"]) . "</li>";
                                } else {
                                    echo '<li><a href="' . htmlspecialchars($crumb["href"]) . '">' . htmlspecialchars($crumb["label"]) . "</a></li>";
                                }
                            }
                            ?>
                        </ol>
                    </nav>
                    <h1 id="doc-page-heading"><?php echo $docHeadingHtml; ?></h1>
                </div>
            </div>
        </section>

        <section class="gov-docs" aria-labelledby="doc-page-heading">
            <div class="container">
                <?php if ($docIntro !== "") { ?>
                <div class="gov-docs-intro">
                    <p><?php echo $docIntro; ?></p>
                </div>
                <?php } ?>
                <?php if (count($docTabs) > 0) { ?>
                <nav class="gov-docs-nav" aria-label="<?php echo htmlspecialchars($docHeading); ?>">
                    <ul class="gov-docs-switch">
                        <?php foreach ($docTabs as $tab) {
                            $isCurrent = !empty($tab["current"]);
                            echo "<li><a href=\"" . htmlspecialchars($tab["href"]) . "\"";
                            if ($isCurrent) {
                                echo ' aria-current="page"';
                            }
                            echo ">" . htmlspecialchars($tab["label"]);
                            if ($isCurrent) {
                                echo '<span class="sr-only"> (current page)</span>';
                            }
                            echo "</a></li>";
                        } ?>
                    </ul>
                </nav>
                <?php } ?>
                <?php if (count($docRows) === 0) { ?>
                    <p class="gov-docs-empty" role="status"><?php echo htmlspecialchars($docEmpty); ?></p>
                <?php } else { ?>
                    <p class="gov-docs-scroll-hint">The table can be scrolled horizontally on a smaller screen.</p>
                    <div class="gov-docs-card">
                        <table class="gov-doc-table">
                            <caption><?php echo htmlspecialchars($docCaption); ?></caption>
                            <thead>
                                <tr>
                                    <th class="col-sl" scope="col"><abbr title="Serial number">S. No.</abbr></th>
                                    <th scope="col"><?php echo htmlspecialchars($docColTitle); ?></th>
                                    <?php if ($docShowDate) { ?>
                                    <th class="col-date" scope="col">Date of issue</th>
                                    <?php } ?>
                                            <th class="col-file" scope="col">Download (format and size)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($docRows as $row) {
                                    $i++;
                                    $rowTitle = isset($row[$docTitleCol]) ? $row[$docTitleCol] : "";
                                    $rowFile = isset($row[$docFileCol]) ? $row[$docFileCol] : "";
                                    echo "<tr>";
                                    echo '<td class="col-sl">' . $i . "</td>";
                                    echo "<td>" . htmlspecialchars($rowTitle) . "</td>";
                                    if ($docShowDate) {
                                        $rowDate = isset($row["date_of_issue"]) ? $row["date_of_issue"] : "";
                                        echo '<td class="col-date">' . ($rowDate !== "" ? fsez_issue_date_html($rowDate) : "&mdash;") . "</td>";
                                    }
                                    echo '<td class="col-file">' . fsez_doc_download_cell($docFolder, $rowFile, $rowTitle) . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
                <?php if (count($docActions) > 0) { ?>
                <div class="gov-docs-actions">
                    <?php foreach ($docActions as $action) { ?>
                    <a href="<?php echo htmlspecialchars($action["href"]); ?>"><?php echo htmlspecialchars($action["label"]); ?></a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </section>

        <?php include("includes/footer.php"); ?>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
