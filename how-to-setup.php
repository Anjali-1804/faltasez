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
    <title><?php echo $gbl_row["org_name"]; ?> | How to Setup</title>

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
                        <li class="active"><a href="how-to-setup.php">How to Setup</a></li>
                    </ol>
                    <h1>How to <span>Setup</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start event-single-main-content -->
        <section class="event-single-main-content">
            <div class="container">
                <div class="row about-event-wrapper">
                    <div class="col col-lg-11">
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="about-event">
                                    <div class="content">
                                        <h3 class="full_width">For Developers</h3>
                                        <li><i class="fa fa-cog"></i><a href="http://sezindia.nic.in/cms/setting-up-of-sez.php" target="_blank" rel="noopener noreferrer" title="Setting up Special Economic Zone">Setting Up SEZ</a></li>
                                        <li><i class="fa fa-cog"></i><a href="http://sezindia.nic.in/cms/how-to-apply.php" target="_blank" rel="noopener noreferrer" title="How to Apply">How To Apply</a></li>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
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
