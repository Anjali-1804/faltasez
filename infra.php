<?php
include("application-top.php");

$agsql = "select * from fsez_auth_agendas where status = 1 order by added_on desc";
$agres = mysqli_query($con, $agsql);
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
    <title><?php echo $gbl_row["org_name"]; ?> | Authority Agenda</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

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
                        <li><a href="falta-sez-authority.php">Authority</a></li>
                        <li class="active" aria-current="page">Infrastructure</li>
                    </ol>
                    <h1><span>Infrastructure</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start main content -->
        <section class="section-padding-lesser-top event-single-main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="content-box">
                            <h2>About Falta Special Economic Zone (Falta SEZ)</h2>
                            <p>Falta Special Economic Zone is spread over <strong>280 acres</strong> of land in the District of <strong>South 24 Parganas, West Bengal</strong> in a pollution-free sylvan environment, at a distance of about <strong>55 kilometres</strong> from Kolkata city.</p>

                            <p>The Zone is connected by a two-lane <strong>National Highway No. 117</strong>. The nearest railway station is <strong>Diamond Harbour Railway Station</strong> which is about <strong>19 kms</strong> from the SEZ. Kolkata and Haldia are the closest sea ports at a distance of about <strong>46 kms</strong> and <strong>48 kms</strong> respectively. The nearest airport is the <strong>Kolkata Airport</strong>, located at a distance of <strong>65 kms</strong> from Falta.</p>

                            <h3>Infrastructural facilities available</h3>
                            <p>The following infrastructural facilities are readily available in the Zone:</p>

                            <ol>
                                <li><strong>Developed plots:</strong> Developed plots of various sizes are available in the zone to meet the requirements of industries, offered at a very nominal lease rent.</li>

                                <li><strong>Industrial sheds & Standard Design Factory (SDF) buildings:</strong> Industrial sheds (Area 6,500 Sq.Mt.) and Standard Design Factory (SDF) buildings (Area 15,570 Sq.Mt.) are also available at very low lease rent.</li>

                                <li><strong>Quality and stable power supply:</strong> WBSEDCL assures uninterrupted power supply for industries to be set up in the zone, through its 132KV service station within the zone with provision for further dedicated service line for individual units at 33/11 KV.</li>

                                <li><strong>Water supply:</strong> 24 hours water supply is ensured through a well-knit distribution system within the zone.</li>

                                <li><strong>Container Handling Jetty:</strong> To facilitate smooth and quick movement of cargo/containers, an independent cargo/container handling jetty is planned to be operational near the Zone. An MoU in this regard has been signed with <em>Titagarh Rail Systems Ltd. (TRSL)</em> on <strong>19.11.2025</strong>.</li>
                            </ol>



                        </div>
                    </div>
                </div>
        </section>
        <!-- end main content -->

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