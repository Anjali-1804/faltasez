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
    <title><?php echo $gbl_row["org_name"]; ?> | Performance</title>

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
                        <li class="active" aria-current="page">Performance</li>
                    </ol>
                    <h1><span>Performance</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start event-single-main-content -->
        <section class="blog-single-main-content section-padding-lesser-top">
            <div class="container">
                <h2 class="sr-only">Export performance charts</h2>
                <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-1.jpg" alt="Chart of total exports from Falta Special Economic Zone across recent financial years" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Exports from FSEZ</h3>
                                <!-- <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/Service_Export_of_fsez_zonewise.jpg" alt="Chart comparing service exports of Falta Special Economic Zone zone wise" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Service Export of FSEZ Zone Wise</h3>

                            </div>
                        </div> 
                    </div>  -->
                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/top_10_service_export.jpg" alt="Chart ranking the top ten service exporting units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten Service Units of FSEZ</h3>
                            </div>
                        </div>
                    </div> -->
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-6.jpg" alt="Chart comparing merchandise exports of each Special Economic Zone" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Merchandise exports SEZ Wise</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-2.jpg" alt="Chart ranking the top ten merchandise exporting units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten Merchandise Units</h3>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/top_10_service_export.jpg" alt="Chart ranking the top ten service exporting units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten Service Units of FSEZ</h3>
                            </div>
                        </div>
                    </div>  -->
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/Service_Export_of_fsez_zonewise.jpg" alt="Chart comparing service exports of Falta Special Economic Zone zone wise" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Service Export of FSEZ Zone Wise</h3>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/Top_10_Eou_Export.jpg" alt="Chart ranking the top ten Export Oriented Units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten EOU Units in FSEZ</h3>
                            </div>
                        </div>
                    </div> -->
                </div>
                <br>
                <div class="row">

                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-4.jpg" alt="Chart of cumulative investment in Falta Special Economic Zone across recent years" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Cumulative Investment in FSEZ</h3>
                            </div>
                        </div>
                    </div> -->
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/top_10_service_export.jpg" alt="Chart ranking the top ten service exporting units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten Service Units of FSEZ</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/EOU_Export_in_Last_5_Year.jpg" alt="Chart of Export Oriented Unit exports from Falta Special Economic Zone over the last five years" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">EOU Export Last 5 Year</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row section-padding-wayless-top">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/Top_10_Eou_Export.jpg" alt="Chart ranking the top ten Export Oriented Units of Falta Special Economic Zone by export value" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Top Ten EOU Units in FSEZ</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-5.jpg" alt="Chart of direct employment in Falta Special Economic Zone across recent years" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Direct Employment in FSEZ</h3>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-10.jpg" alt="Chart of Export Oriented Unit performance in Falta Special Economic Zone" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">EOU Performance</h3>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row section-padding-wayless-top">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-4.jpg" alt="Chart of cumulative investment in Falta Special Economic Zone across recent years" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Cumulative Investment in FSEZ</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="row section-padding-wayless-top">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-11.jpg" alt="Table of entity wise merchandise exports from Falta Special Economic Zone, page 1" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Entity Wise Merchandise Export (Page 1)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-12.jpg" alt="Table of entity wise merchandise exports from Falta Special Economic Zone, page 2" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Entity Wise Merchandise Export (Page 2)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row section-padding-wayless-top">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-13.jpg" alt="Table of entity wise merchandise exports from Falta Special Economic Zone, page 3" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Entity Wise Merchandise Export (Page 3)</h3>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row section-padding-wayless-top">
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-7.jpg" alt="Chart of service exports from Falta Special Economic Zone in financial year 2023-24" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Service Exports in FY '23-24</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 blog-single-content">
                        <div class="performance post">
                            <div class="media">
                                <img src="images/past-performance/fsez-perf-8.jpg" alt="Chart of the leading sectors of merchandise exports from Falta Special Economic Zone in financial year 2023-24" class="img img-responsive">
                            </div>
                            <div class="gallery-post">
                                <h3 class="text-center">Leading Sectors of Merchandise Exports '23-24</h3>
                            </div>
                        </div>
                    </div> 
                </div> -->
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-main-content -->


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
