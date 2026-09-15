<?php
$proseTitle = isset($proseTitle) ? $proseTitle : "Policy";
$proseHeading = isset($proseHeading) ? $proseHeading : $proseTitle;
$proseMeta = isset($proseMeta) ? $proseMeta : $proseTitle;
$proseBody = isset($proseBody) ? $proseBody : "";
$org = isset($gbl_row["org_name"]) ? $gbl_row["org_name"] : "Falta SEZ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($proseMeta); ?>">
    <meta name="keywords" content="Falta SEZ, FSEZ, GIGW, <?php echo htmlspecialchars($proseTitle); ?>">
    <title><?php echo htmlspecialchars($org); ?> | <?php echo htmlspecialchars($proseTitle); ?></title>
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
                            <li aria-current="page"><?php echo htmlspecialchars($proseTitle); ?></li>
                        </ol>
                    </nav>
                    <h1><?php echo $proseHeading; ?></h1>
                </div>
            </div>
        </section>
        <section class="gov-docs">
            <div class="container">
                <div class="gov-prose">
                    <?php echo $proseBody; ?>
                    <p>This document is administered by the Web Information Manager, Office of the Development Commissioner, Falta Special Economic Zone. Last reviewed: <?php echo fsez_last_updated_html(); ?>.</p>
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
