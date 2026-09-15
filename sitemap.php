<?php
include("application-top.php");

/**
 * HTML sitemap. The structure lives in includes/sitemap-data.php so that this
 * page and sitemap.xml cannot drift apart. Links are relative so the page
 * works on the live site, on a staging copy and offline.
 */
$sitemap = include("includes/sitemap-data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitemap of the Falta Special Economic Zone website, listing every section and page.">
    <meta name="keywords" content="FSEZ sitemap, Falta SEZ site map, website structure">
    <title><?php echo htmlspecialchars($gbl_row["org_name"]); ?> | Sitemap</title>
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
                            <li aria-current="page">Sitemap</li>
                        </ol>
                    </nav>
                    <h1 id="sitemap-heading">Site <span>Map</span></h1>
                </div>
            </div>
        </section>

        <section class="gov-docs" aria-labelledby="sitemap-heading">
            <div class="container">
                <div class="gov-docs-intro">
                    <p>Every section of this website is listed below. You can also use the search box in the page header to find a page by name.</p>
                </div>
                <div class="gov-sitemap">
                    <?php foreach ($sitemap as $section => $links) {
                        $sectionId = "sitemap-" . substr(md5($section), 0, 8);
                    ?>
                    <nav class="gov-sitemap-group" aria-labelledby="<?php echo $sectionId; ?>">
                        <h2 id="<?php echo $sectionId; ?>"><?php echo htmlspecialchars($section); ?></h2>
                        <ul>
                            <?php foreach ($links as $link) { ?>
                            <li><a href="<?php echo htmlspecialchars($link[1]); ?>"><?php echo htmlspecialchars($link[0]); ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <?php } ?>
                </div>
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
