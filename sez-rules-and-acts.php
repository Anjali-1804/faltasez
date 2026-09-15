<?php
include("application-top.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Falta SEZ,Special Economic Zones in India,SEZ,Falta Special Economic Zone,FSEZ">
    <meta name="title" content="Falta SEZ">
    <meta name="description" content="Falta Special Economic Zone">

    <!-- Page Title -->
    <title><?php echo $gbl_row["org_name"]; ?> | SEZ Rules & Acts</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <!-- <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

    <!-- Icon fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper event-single-page">

        <!-- Start header -->
        <?php include("includes/header.php"); ?>
        <!-- end of header -->

        <!-- start page-title -->
        <section class="repo page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active" aria-current="page">SEZ Rules & Acts</li>
                    </ol>
                    <h1><span>SEZ </span>Rules & Acts</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start event-single-main-content -->
        <section class="event-single-main-content">
            <div class="container">
                <div class="row section-padding-lesser-top about-event-wrapper">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="about-event no-bottom-border custom-padding">
                                    <h3>SEZ Rules</h3>
                                    <div class="content">
                                        <li><i class="fa fa-download"></i><a href="repo/sez-files/Rule-Book.pdf" target="_blank">The Special Economic Zones Rules</a></li>
                                        <!-- <li><i class="fa fa-external-link"></i><a href="http://sezindia.nic.in/cms/sez-rules-and-amendments.php" target="_blank">SEZ India - Rules </a></li> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="about-event no-bottom-border custom-padding">
                                    <h3>SEZ Acts</h3>
                                    <div class="content">
                                        <li><i class="fa fa-download"></i><a href="repo/sez-files/Act-Book.pdf" target="_blank">The Special Economic Zones Act</a></li>
                                        <!-- <li><i class="fa fa-download"></i><a href="repo/sez-files/SEZ Act amedment 2019.pdf" target="_blank">The Special Economic Zones Act Amedment 2019</a></li>
                                    <li><i class="fa fa-external-link"></i><a href="http://sezindia.nic.in/cms/sez-act.php" target="_blank">SEZ India - Acts</a></li> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="about-event no-bottom-border custom-padding">
                                    <h3 class="sez-rule-foreign-trade-policy">Foreign Trade Policy</h3>
                                    <div class="content">
                                        <li><i class="fa fa-arrow-circle-right"></i> <a href="https://www.dgft.gov.in/CP/?opt=ft-policy" target="_blank">Foreign Trade Policy</a></li>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col col-md-4">
                                <div class="about-event no-bottom-border custom-padding">
                                    <h3>Foreign Trade Procedure</h3>
                                    <div class="content">
                                        <li><i class="fa fa-arrow-circle-right"></i> <a href="https://www.dgft.gov.in/CP/?opt=ft-procedures" target="_blank">Foreign Trade Procedure</a></li>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="about-event no-bottom-border custom-padding">
                                    <h3>Appendices & Aayat Niryat Forms</h3>
                                    <div class="content">
                                        <li><i class="fa fa-arrow-circle-right"></i> <a href="https://www.dgft.gov.in/CP/?opt=aayat-form" target="_blank">Appendices & Aayat Niryat Forms</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->

            <!-- start partner -->
            <?php include("includes/partner.php"); ?>
            <!-- end partner -->
        </section>
        <!-- end event-single-main-content -->


        <!-- start footer -->
        <?php include("includes/footer.php"); ?>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="js/script.js"></script>
</body>

</html>