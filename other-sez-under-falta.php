<?php
include("application-top.php");

$rsql = "select * from fsez_rti where status = 1 order by added_on desc";
$rres = mysqli_query($con, $rsql);
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
    <title><?php echo $gbl_row["org_name"]; ?> | Other SEZ Under Falta</title>

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
                        <li><a href="fsez-at-a-glance.php">About FSEZ</a></li>
                        <li class="active" aria-current="page">SEZs Under Falta</li>
                    </ol>
                    <h1><span>SEZs</span> Under Falta</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start event-single-main-content -->
        <section class="event-single-main-content">
            <div class="container">
                <div class="row about-event-wrapper">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="about-event custom-spacing-2">
                                    <div class="content">
                                        <h3 class="full_width">West Bengal</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Manikanchan SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>Wipro IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>Candor Kolkata IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>DLF IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>TCS IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>M L Dalmia IT/ITes SEZ (Bantala)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-event custom-spacing-2">
                                    <div class="content">
                                        <h3 class="full_width">Odisha</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>IDCO-I IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>IDCO-I IT/ITes SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>Vedanta Ltd. SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>Saraf Agencies Ltd. SEZ</li>
                                            <li><i class="fa fa-angle-right"></i>Tata Steel SEZ</li>
                                        </ul>
                                        <h3 class="full_width">Jharkhand</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Adani Power Ltd. SEZ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-event custom-spacing-2">
                                    <div class="content">
                                        <h3 class="full_width">Tripura</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>TIDC Ltd SEZ, Sabroom</li>
                                        </ul>
                                        <h3 class="full_width">Manipur</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Manipur IT SEZ (Notified)</li>
                                        </ul>
                                        <h3 class="full_width">Sikkim</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Namli IT/ITES SEZ (Notified)</li>
                                        </ul>
                                        <h3 class="full_width">Nagaland</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Nagaland Industrial Development Corp SEZ</li>
                                        </ul>
                                        <h3 class="full_width">Arunachal Pradesh</h3>
                                        <ul>
                                            <li><i class="fa fa-angle-right"></i>Department of Trade & Commerce</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
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
