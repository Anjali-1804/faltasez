<?php
include("application-top.php");
$org = isset($gbl_row["org_name"]) ? $gbl_row["org_name"] : "Falta SEZ";
$q = isset($_GET["q"]) ? trim($_GET["q"]) : "";
$results = array();

if ($q !== "" && isset($con) && $con) {
    $safe = mysqli_real_escape_string($con, $q);
    $like = "%" . $safe . "%";
    $queries = array(
        array("News", "circulars-and-policies.php", "SELECT news_description AS title FROM fsez_news WHERE news_description LIKE '$like' LIMIT 20"),
        array("Tenders", "tenders.php", "SELECT tender_name AS title FROM fsez_tenders WHERE tender_name LIKE '$like' AND status = 1 LIMIT 20"),
        array("Circulars", "circulars-and-policies.php", "SELECT circular_name AS title FROM fsez_circulars WHERE circular_name LIKE '$like' AND status = 1 LIMIT 20"),
        array("Vacancies", "vacancy.php", "SELECT vacancy_name AS title FROM fsez_vacancies WHERE vacancy_name LIKE '$like' AND status = 1 LIMIT 20"),
        array("Forms", "forms.php", "SELECT form_name AS title FROM fsez_forms WHERE form_name LIKE '$like' AND status = 1 LIMIT 20")
    );
    foreach ($queries as $item) {
        $res = mysqli_query($con, $item[2]);
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $results[] = array("type" => $item[0], "url" => $item[1], "title" => $row["title"]);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Search Falta SEZ website">
    <meta name="keywords" content="Falta SEZ search, FSEZ search, find tenders circulars vacancies forms">
    <title><?php echo htmlspecialchars($org); ?> | Search</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper event-single-page">
        <?php include("includes/header.php"); ?>
        <section class="repo page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active" aria-current="page">Search</li>
                        </ol>
                    </nav>
                    <h1>Search <span>results</span></h1>
                </div>
            </div>
        </section>
        <section class="event-single-main-content">
            <div class="container">
                <div class="about-event">
                    <div class="content">
                        <form class="gigw-search" action="search.php" method="get" role="search">
                            <label for="search-q">Search this website</label>
                            <input id="search-q" type="search" name="q" value="<?php echo htmlspecialchars($q); ?>" required>
                            <button type="submit">Search</button>
                        </form>
                        <?php if ($q === "") { ?>
                            <p>Enter a keyword to search news, tenders, circulars, vacancies and forms.</p>
                        <?php } else if (count($results) === 0) { ?>
                            <p>No results found for “<?php echo htmlspecialchars($q); ?>”.</p>
                        <?php } else { ?>
                            <h2><?php echo count($results); ?> result(s) for “<?php echo htmlspecialchars($q); ?>”</h2>
                            <ul>
                                <?php foreach ($results as $item) { ?>
                                <li>
                                    <strong><?php echo htmlspecialchars($item["type"]); ?>:</strong>
                                    <a href="<?php echo htmlspecialchars($item["url"]); ?>"><?php echo htmlspecialchars($item["title"]); ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
