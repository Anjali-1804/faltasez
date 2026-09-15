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
    <title><?php echo $gbl_row["org_name"]; ?> | Screen Reader Access</title>

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
                        <li class="active" aria-current="page">Screen Reader</li>
                    </ol>
                    <h1><span>Screen Reader</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <section class="event-single-main-content">
            <div class="container">
                <div class="row about-event-wrapper">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col col-md-12">
                                <div class="about-event">
                                    <!-- <h3>Reaching Falta SEZ</h3> -->
                                    <div class="content">
                                        <p>Screen readers let people with visual impairments use this website with assistive technology. The site can be used with screen readers such as JAWS, NVDA, SAFA, Supernova and Window-Eyes.</p>
                                        <h4>The table below lists information about different screen readers</h4>
                                        <table class="table table-responsive table-bordered table-hover file-list">
                                            <caption>List of screen readers with their websites and whether they are free or commercial</caption>
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col"><strong>Screen Reader</strong></th>
                                                    <th scope="col"><strong>Website</strong></th>
                                                    <th scope="col"><strong>Free / Commercial</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="notranslate">Non Visual Desktop Access (NVDA)</td>
                                                    <td><a class="third-party-ex notranslate" href="https://www.nvaccess.org/" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">https://www.nvaccess.org/</a></td>
                                                    <td>Free</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">System Access To Go</td>
                                                    <td><a class="third-party-ex notranslate" href="http://www.satogo.com/" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://www.satogo.com/</a></td>
                                                    <td>Free</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">Thunder</td>
                                                    <td><a class="third-party-ex notranslate" href="http://www.screenreader.net/" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://www.screenreader.net/</a></td>
                                                    <td>Free</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">WebAnywhere</td>
                                                    <td><a class="third-party-ex notranslate" href="http://webanywhere.cs.washington.edu/wa.php" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://webanywhere.cs.washington.edu/wa.php</a></td>
                                                    <td>Free</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">Hal</td>
                                                    <td><a class="third-party-ex notranslate" href="http://www.yourdolphin.co.uk/productdetail.asp?id=5" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://www.yourdolphin.co.uk/productdetail.asp?id=5</a></td>
                                                    <td>Commercial</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">JAWS</td>
                                                    <td><a class="third-party-ex notranslate" href="https://www.freedomscientific.com/products/software/jaws/" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">https://www.freedomscientific.com/products/software/jaws/</a></td>
                                                    <td>Commercial</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">Supernova</td>
                                                    <td><a class="third-party-ex notranslate" href="http://www.yourdolphin.co.uk/productdetail.asp?id=1" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://www.yourdolphin.co.uk/productdetail.asp?id=1</a></td>
                                                    <td>Commercial</td>
                                                </tr>
                                                <tr>
                                                    <td class="notranslate">Window-Eyes</td>
                                                    <td><a class="third-party-ex notranslate" href="http://www.gwmicro.com/Window-Eyes/" target="_blank" title="External site that opens in a new window" rel="noopener noreferrer">http://www.gwmicro.com/Window-Eyes/</a></td>
                                                    <td>Commercial</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
