<?php
include("application-top.php");

$fsql = "select * from fsez_forms where added_on >= CURDATE() - INTERVAL 6 MONTH AND CURDATE() and status = 1 order by added_on desc";
$fres = mysqli_query($con, $fsql);

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
    <title><?php echo $gbl_row["org_name"]; ?> | Forms</title>

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
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper about-page">

        <!-- Start header -->

        <?php include("includes/header.php"); ?>

        <!-- end of header -->

        <!-- start page-title -->
        <section class="repo page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <h1>FSEZ <span>Forms</span></h1>
                    <ol class="breadcrumb">
                        <li><a href="instructions.php">Instructions</a></li>
                        <li class="active">Notices</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <section class="important-causes section-padding">
              <div class="container">
                  <div class="row section-title-s3">
                      <div class="col col-md-10 col-md-offset-1">
                          <h2><span>Forms</span> Section</h2>
                          <p>This is the section to download all the forms uploaded by Falta SEZ</p>
                      </div>
                  </div> <!-- end section-title -->

                  <div class="row content important-causes-content report">
                  <?php
                     if($fres)
                     {
                      while($frow = mysqli_fetch_array($fres))
                      {
                        ?>
                      <div class="col col-md-3 col-xs-6">
                          <div class="grid">
                            <img src="images/circular.png" alt="">
                            <div class="details">
                                <h3><?php echo $frow["form_name"]; ?></h3>
                            </div>
                              <div class="causes-info">
                                  <a href="admin/upload_form_documents/<?php echo $frow["form_file_name"]; ?>" target="_blank" class="btn">View Report</a>
                              </div>
                          </div>
                      </div>
                    <?php
                      }
                    }
                    ?>
                  </div>

                   <div class="join">
                        <a href="archieve.php?type=form" class="btn theme-btn">Go To Archieve</a>
                  </div>
              </div> <!-- end container -->
          </section>


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
