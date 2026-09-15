<?php
include("application-top.php");

$archives = array(
    "circular" => array(
        "table" => "fsez_circulars",
        "title_col" => "circular_name",
        "file_col" => "circular_file_name",
        "folder" => "admin/upload_circular_documents",
        "months" => 12,
        "heading" => "Circulars Archive",
        "heading_html" => "Circulars <span>Archive</span>",
        "col_title" => "Circular / Policy Name",
        "caption" => "Archived circulars and policies",
        "intro" => "Circulars issued more than 12 months ago.",
        "back" => "circulars-and-policies.php",
        "back_label" => "Circulars",
        "empty" => "No archived circular is available at present.",
    ),
    "tender" => array(
        "table" => "fsez_tenders",
        "title_col" => "tender_name",
        "file_col" => "tender_file_name",
        "folder" => "admin/upload_tender_documents",
        "months" => 12,
        "heading" => "Tenders Archive",
        "heading_html" => "Tenders <span>Archive</span>",
        "col_title" => "Tender / Notice",
        "caption" => "Archived tenders and notices",
        "intro" => "Tenders issued more than 12 months ago.",
        "back" => "tenders.php",
        "back_label" => "Tenders",
        "empty" => "No archived tender is available at present.",
    ),
    "vacancy" => array(
        "table" => "fsez_vacancies",
        "title_col" => "vacancy_name",
        "file_col" => "vacancy_file_name",
        "folder" => "admin/upload_vacancy_documents",
        "months" => 12,
        "heading" => "Vacancies Archive",
        "heading_html" => "Vacancies <span>Archive</span>",
        "col_title" => "Vacancy notification",
        "caption" => "Archived vacancy notifications",
        "intro" => "Vacancy notifications issued more than 12 months ago.",
        "back" => "vacancy.php",
        "back_label" => "Vacancies",
        "empty" => "No archived vacancy is available at present.",
    ),
    "form" => array(
        "table" => "fsez_forms",
        "title_col" => "form_name",
        "file_col" => "form_file_name",
        "folder" => "admin/upload_form_documents",
        "months" => 12,
        "heading" => "Forms Archive",
        "heading_html" => "Forms <span>Archive</span>",
        "col_title" => "Form name",
        "caption" => "Archived forms",
        "intro" => "Forms issued more than 12 months ago.",
        "back" => "forms-and-notices.php",
        "back_label" => "Forms",
        "empty" => "No archived form is available at present.",
    ),
    "export" => array(
        "table" => "fsez_exports",
        "title_col" => "export_title",
        "file_col" => "export_file_name",
        "folder" => "admin/upload_export_documents",
        "months" => 12,
        "heading" => "Export Performance Archive",
        "heading_html" => "Export Performance <span>Archive</span>",
        "col_title" => "Title of document",
        "caption" => "Archived export performance reports",
        "intro" => "Export performance reports issued more than 12 months ago.",
        "back" => "export-performances.php",
        "back_label" => "Export Performance",
        "empty" => "No archived export report is available at present.",
    ),
    "authority_agenda" => array(
        "table" => "fsez_auth_agendas",
        "title_col" => "auth_agenda_title",
        "file_col" => "auth_agenda_file",
        "folder" => "admin/upload_authority_agenda_documents",
        "months" => 6,
        "heading" => "Authority Agenda Archive",
        "heading_html" => "Authority Agenda <span>Archive</span>",
        "col_title" => "Authority Meeting Agenda",
        "caption" => "Archived authority meeting agendas",
        "intro" => "Authority meeting agendas issued more than 6 months ago.",
        "back" => "authority-meeting-agenda.php",
        "back_label" => "Authority Meeting Agenda",
        "empty" => "No archived agenda is available at present.",
    ),
);

$type = isset($_GET["type"]) ? strtolower(trim((string) $_GET["type"])) : "";
$cfg = isset($archives[$type]) ? $archives[$type] : null;

$rows = array();
if ($cfg) {
    $months = (int) $cfg["months"];
    $table = $cfg["table"];
    $sql = "select * from " . $table . " where status = 1 and added_on < DATE_SUB(CURDATE(), INTERVAL " . $months . " MONTH) order by added_on desc";
    $res = mysqli_query($con, $sql);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $rows[] = $row;
        }
    }
}

$pageTitle = $cfg ? $cfg["heading"] : "Archive";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($pageTitle); ?> of Falta Special Economic Zone.">
    <meta name="keywords" content="Falta SEZ, FSEZ, archive, <?php echo htmlspecialchars($pageTitle); ?>, past documents">
    <title><?php echo htmlspecialchars($gbl_row["org_name"]); ?> | <?php echo htmlspecialchars($pageTitle); ?></title>
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
                            <li><a href="index.php">Home</a></li>
                            <?php if ($cfg) { ?>
                            <li><a href="<?php echo htmlspecialchars($cfg["back"]); ?>"><?php echo htmlspecialchars($cfg["back_label"]); ?></a></li>
                            <?php } ?>
                            <li aria-current="page">Archive</li>
                        </ol>
                    </nav>
                    <h1 id="archive-page-heading"><?php echo $cfg ? $cfg["heading_html"] : "Archive"; ?></h1>
                </div>
            </div>
        </section>

        <section class="gov-docs" aria-labelledby="archive-page-heading">
            <div class="container">
                <?php if (!$cfg) { ?>
                    <p class="gov-docs-empty" role="status">The requested archive was not found.</p>
                <?php } else { ?>
                <div class="gov-docs-intro">
                    <p><?php echo htmlspecialchars($cfg["intro"]); ?></p>
                </div>
                <nav class="gov-docs-nav" aria-label="<?php echo htmlspecialchars($cfg["heading"]); ?>">
                    <ul class="gov-docs-switch">
                        <li><a href="<?php echo htmlspecialchars($cfg["back"]); ?>"><?php echo htmlspecialchars($cfg["back_label"]); ?></a></li>
                        <li><a href="archieve.php?type=<?php echo htmlspecialchars($type); ?>" aria-current="page">Archive<span class="sr-only"> (current page)</span></a></li>
                    </ul>
                </nav>
                <?php if (count($rows) === 0) { ?>
                    <p class="gov-docs-empty" role="status"><?php echo htmlspecialchars($cfg["empty"]); ?></p>
                <?php } else { ?>
                    <p class="gov-docs-scroll-hint">The table can be scrolled horizontally on a smaller screen.</p>
                    <div class="gov-docs-card">
                        <table class="gov-doc-table">
                            <caption><?php echo htmlspecialchars($cfg["caption"]); ?></caption>
                            <thead>
                                <tr>
                                    <th class="col-sl" scope="col"><abbr title="Serial number">S. No.</abbr></th>
                                    <th scope="col"><?php echo htmlspecialchars($cfg["col_title"]); ?></th>
                                    <th class="col-date" scope="col">Date of issue</th>
                                    <th class="col-file" scope="col">Download (format and size)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($rows as $row) {
                                    $i++;
                                    $title = $row[$cfg["title_col"]];
                                    echo "<tr>";
                                    echo "<td class=\"col-sl\">" . $i . "</td>";
                                    echo "<td>" . htmlspecialchars($title) . "</td>";
                                    echo "<td class=\"col-date\">" . fsez_issue_date_html($row["date_of_issue"]) . "</td>";
                                    echo "<td class=\"col-file\">" . fsez_doc_download_cell($cfg["folder"], $row[$cfg["file_col"]], $title) . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
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
