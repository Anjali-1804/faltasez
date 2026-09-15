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
    <title><?php echo $gbl_row["org_name"]; ?> | Public Notice</title>

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
                        <li class="active"><a href="public-notice.php">Public Notice</a></li>
                    </ol>
                    <h1><span>Public Notice</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <section class="section-padding-lesser-top important-causes">
          <div class="container">
             <div class="row content important-causes-content report">
                <!-- added id to the table as sortTable -->
                <table id="sortTable" class="table table-bordered table-hover table-responsive file-list">
                  <caption>List of public notices with publish dates and download links</caption>
                  <thead class="thead-dark">
                      <tr>
                        <th type="number" scope="col"><abbr title="Serial number">SL</abbr> <i class="fa-solid"></i></th>
                        <th type="string" scope="col">Notice<i class="fa-solid"></i></th>
                        <th class="text-center" type="date" scope="col">Publish Date <i class="fa-solid"></i></th>
                        <th class="text-center" type="file" scope="col">Download <i class="fa-solid"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="w-5">1</td>
                      <td>Show Cause Notice - Cloom Trading Private Limited</td>
                      <td class="w-15">14-08-2023</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Cloom Trading Private Limited.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">2</td>
                      <td>Show Cause Notice - Blue Brilliance Exim Pvt Ltd</td>
                      <td class="w-15">14-08-2023</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Blue Brilliance Exim Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">3</td>
                      <td>Show Cause Notice - Ariova Enterprises Private Limited</td>
                      <td class="w-15">14-08-2023</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Ariova Enterprises Private Limited.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">4</td>
                      <td>Show Cause Notice - Kimat Trading Pvt Ltd</td>
                      <td class="w-15">22-08-2023</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Kimat Trading Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">5</td>
                      <td>Show Cause Notice - M/s Syzmi Trading Pvt Ltd</td>
                      <td class="w-15">31-10-2023</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Syzmi Trading Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">6</td>
                      <td>Show Cause Notice - M/s S. G. International Pvt Ltd</td>
                      <td class="w-15">13-02-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - S. G. International Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">7</td>
                      <td>Show Cause Notice - MP Industries</td>
                      <td class="w-15">15-02-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Show_Cause_Notice_MP_Industries_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>  
                    <tr>
                      <td class="w-5">8</td>
                      <td>Show Cause Notice - for M/s SUMIT Jewels Private Limited</td>
                      <td class="w-15">07-03-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Show Cause Notice - Sumit Jewels Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">9</td>
                      <td>Public Notice - M/s MET Technologies Private Ltd a IT/ITES unit located at M/s Candor Kolkata One Hi-Tech Structures Pvt Ltd IT/ITES SEZ</td>
                      <td class="w-15">18-03-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Public Notice - MET Technologies Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>  
                    <tr>
                      <td class="w-5">10</td>
                      <td>Public Notice - e-Auction for the goods laying in the premises of M/s. Karan Exports (I) Pvt. Ltd.</td>
                      <td class="w-15">08-04-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Public Notice -  Karan Exports (I) Pvt Ltd.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">11</td>
                      <td>Notice - M/s Fabon Enginnering Pvt Ltd</td>
                      <td class="w-15">24-04-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Notice - Fabon Enginnering.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">12</td>
                      <td>Notice - Ione Exim</td>
                      <td class="w-15">24-04-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Notice - Ione Exim.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr> 
                    <tr>
                      <td class="w-5">13</td>
                      <td>M P Industries - Non-Reply of SCN Dated 06.09.2023, issued for non renewal of LOA</td>
                      <td class="w-15">27-06-2024</td>
                      <td class="w-15"><a href="repo/public-notice/M_P_Industries_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">14</td>
                      <td>ORDER IN ORIGINAL ​- M/s. Sen Pet (India) Ltd.</td>
                      <td class="w-15">05-08-2024</td>
                      <td class="w-15"><a href="repo/public-notice/ORDER_IN_ORIGINAL_Sen_Pet_Ltd_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">15</td>
                      <td>Show Cause Notice - M.B. Innotech (India) Ltd.</td>
                      <td class="w-15">08-10-2024</td>
                      <td class="w-15"><a href="repo/public-notice/Show_Cause_Notice_M.B._Innotech_India_Ltd_00_01.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">16</td>
                      <td>NOTICE dated 10th January, 2025 - M/s. H4U Exports Pvt. Ltd.</td>
                      <td class="w-15">10-01-2025</td>
                      <td class="w-15"><a href="repo/public-notice/Notice_dated_10th_January_2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">17</td>
                      <td>NOTICE INVITING QUOTATION regarding Celebration of 76th Republic Day 2025 at Falta SEZ.</td>
                      <td class="w-15">21-01-2025</td>
                      <td class="w-15"><a href="repo/public-notice/NOTICE_INVITING_QUATATION_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">18</td>
                      <td>NOTICE INVITING QUOTATION regarding Installation of CCTV camera at Falta SEZ Office.</td>
                      <td class="w-15">10-02-2025</td>
                      <td class="w-15"><a href="repo/public-notice/NOTICE_INVITING_QUOTATION_00011112.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">18</td>
                      <td>Inviting objections on Draft List of electorates for EPCES Election 20205-27</td>
                      <td class="w-15">14-07-2025</td>
                      <td class="w-15"><a href="repo/public-notice/EPCES_Election_2025-27.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">19</td>
                      <td>PUBLIC NOTICE dated 05th August, 2025 - M/s Antarctica Ltd</td>
                      <td class="w-15">05-08-2025</td>
                      <td class="w-15"><a href="repo/public-notice/PUBLIC_NOTICE_dated_05th_August_2025_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">20</td>
                      <td>PUBLIC NOTICE dated 05th August, 2025 - M/s MNR Exports Pvt Ltd</td>
                      <td class="w-15">05-08-2025</td>
                      <td class="w-15"><a href="repo/public-notice/Public_Notice_MNR.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">21</td>
                      <td>FSEZ Order dated 23rd October, 2025 - Estate Officer</td>
                      <td class="w-15">23-10-2025</td>
                      <td class="w-15"><a href="repo/public-notice/FSEZ_Order_dated_23rd_October_2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">22</td>
                      <td>PUBLIC NOTICE w.r.t M/s. MNR Exports Private Limited</td>
                      <td class="w-15">18-12-2025</td>
                      <td class="w-15"><a href="repo/public-notice/Public_Notice_w.r.t_MNR_Exports_Private_Limited_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">23</td>
                      <td>PUBLIC NOTICE w.r.t M/s. Jai Bharat Plastics</td>
                      <td class="w-15">18-12-2025</td>
                      <td class="w-15"><a href="repo/public-notice/Public_Notice_w.r.t_Jai_Bharat_Plastics_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">23</td>
                      <td>Public Notice - M/s Jiwanram Sheoduttrai Industries Pvt Ltd</td>
                      <td class="w-15">15-04-2026</td>
                      <td class="w-15"><a href="repo/public-notice/15_april.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">23</td>
                      <td>Public Notice - M/s Exotica International Limited</td>
                      <td class="w-15">04-05-2026</td>
                      <td class="w-15"><a href="repo/public-notice/04_may.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                    <tr>
                      <td class="w-5">23</td>
                      <td>Show Cause Notice - S. R. Enterprise</td>
                      <td class="w-15">27-05-2026</td>
                      <td class="w-15"><a href="repo/public-notice/Show_Cause_Notice_0001.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                    </tr>
                  </tbody>
               </table>
             </div>
            </div> <!-- end container -->
          </section>
        <!-- End Section -->


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

    <!-- Table sorting -->
    <script src="js/sort.js"></script>

</body>
</html>
