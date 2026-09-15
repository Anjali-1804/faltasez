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
    <title><?php echo $gbl_row["org_name"]; ?> | Photo Gallery</title>

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
            <!-- <div class="page-title-bg"></div> -->
            <div class="container">
                <div class="title-box">
                    <ol class="breadcrumb">
                        <li><a href="photo-gallery-mod.php">Media</a></li>
                        <li class="active" aria-current="page">Photo Gallery</li>
                    </ol>
                    <h1><span>Photo</span> Gallery</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start gallery-st2 -->
        <section class="gallery-4col-content sortable-gallery gallery section-padding-lesser-top">
            <h2 class="hidden">Gallery</h2>
            <div class="container">
                <div class="row">
                      <?php
                       $gcsql = "select * from fsez_gallery_categories where status = 1";
                       $gcres = mysqli_query($con, $gcsql);
                       ?>
                    <div class="col col-lg-12">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <?php
                                if($gcres)
                                {
                                while($gcrow = mysqli_fetch_array($gcres))
                                {
                                ?>
                                <li><a data-filter=".<?php echo $gcrow["category_name"]; ?>" href="#"><?php echo $gcrow["category_name"]; ?></a></li>
                                <?php
                                }
                                }
                                ?>
                            </ul>
                        </div>

                       <?php
                       $glsql = "select * from fsez_gallery_images where status = 1 order by added_on DESC";
                       $glres = mysqli_query($con, $glsql);
                       ?>
                        <div class="gallery-container popup-gallery">
                            <?php
                            if($glres)
                            {
                                while($glrow = mysqli_fetch_array($glres))
                                {
                                    $glalt = fsez_gallery_image_alt($glrow["category_id"]);
                            ?>
                            <div class="box <?php echo get_category_name($glrow["category_id"]); ?>">
                                <a href="admin/upload_gallery_images/<?php echo $glrow["gallery_image"]; ?>">
                                    <div class="img-holder">
                                        <img src="admin/upload_gallery_images/<?php echo $glrow["gallery_image"]; ?>" alt="<?php echo htmlspecialchars($glalt, ENT_QUOTES, 'UTF-8'); ?>" class="img img-responsive">
                                    </div>
                                    <!-- <div class="hover-text">
                                        <div>
                                            <h3>26th Jan Celebration</h3>
                                            <span>Flag Hoisting</span>
                                        </div>
                                    </div> -->
                                </a>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-st2 -->


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
