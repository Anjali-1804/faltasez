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
    <title><?php echo $gbl_row["org_name"]; ?> | Disclaimer</title>

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
                        <li class="active" aria-current="page">Disclaimer</li>
                    </ol>
                    <h1><span>Disclaimer</span></h1>
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
                            <div class="col col-md-12">
                                <div class="about-event">
                                    <!-- <h2>Disclaimer</h2> -->
                                    <div class="content">
                                        <p>This Website is designed & developed by SEZ, Ministry of Commerce & Industry, Department of Commerce, Government of India. 
                                            The contents of this website are for information purposes only, enabling public to have a quick and an easy access to information. 
                                            We are taking every effort to provide accurate and updated information. However, it is likely that the details such as telephone numbers, 
                                            name of the officer holding a post, etc may change prior to their updating in the web site. Hence, we do not assume any legal liability 
                                            on the completeness, accuracy or usefulness of the contents provided in this web site. </p>
                                          <p>The links are provided to other external sites in some documents. We are not responsible for the accuracy of the contents in those sites. 
                                            The hyperlinks given to external sites do not constitute an endorsement of information, products or services offered by these sites. </p>
                                          <p>Despite our best efforts, we do not guarantee that the documents in this site are free from infection by computer viruses etc. </p>
                                          <p>We welcome your suggestions to improve our site and request that any error found may kindly be brought to our notice. </p>
                                          <p>Thanks for visiting our site.<br>
                                          - <i>Web Site Administration Team</i></p>
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
