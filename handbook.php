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
    <title><?php echo $gbl_row["org_name"]; ?> | Handbook</title>

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
                        <li class="active" aria-current="page">Handbooks</li>
                    </ol>
                    <h1>Mannuals & <span>Handbooks</span></h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <section class="section-padding-lesser-top event-single-main-content">
            <div class="container">
                <!-- <div class="row section-title-s3">
                  <div class="col col-md-12">
                      <h3 class="forms-page">Download FSEZ Authority Agenda</h3>
                  </div>
            </div> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row content important-causes-content report">
                            <table class="table table-bordered table-hover table-responsive file-list">
                                <caption>List of manuals and handbooks with their custodian, available formats, cost, languages and location</caption>
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><abbr title="Serial number">Sl No</abbr></th>
                                        <th scope="col">Manual/Handbook</th>
                                        <th scope="col">Custodian</th>
                                        <th scope="col">Electronic Format</th>
                                        <th scope="col">Printed Format</th>
                                        <th scope="col">Free of Cost</th>
                                        <th scope="col">At a Reasonable Cost</th>
                                        <th scope="col">English</th>
                                        <th scope="col">Vernacular/Local Language</th>
                                        <th scope="col">Last Date of Annual Updation</th>
                                        <th scope="col">Location Where Available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SEZ Act 2005</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SEZ Rules 2006</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SEZInstructions</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>SEZ Clarifications</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Foreign Trade policy Chapter 6</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Handbook of procedures</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Appendices</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Aayat niryat Forms</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>World Trade Organization 13th MC</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>FTAs</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>APTA</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>SAPTA</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>India Mauririus CECPA</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Consultations Service FTA</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>India UK trade Rules of Origin</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Common Digital Platform</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>GSP Brief Documents of GSP Issuance</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Australla GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>EU GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Kazakhstan GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>NEW Zealand GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Norway GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>RUSSIA GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Switzerland GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>UK GSP</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Prerna Edition-1</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Prerna Edition-2</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Prerna Edition-3</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Prerna Edition-4</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Prerna Edition-5</td>
                                        <td>DDC (Social Media)</td>
                                        <td>Yes</td>
                                        <td>Available at Falta SEZ office</td>
                                        <td>Soft Copy</td>
                                        <td>2 rs per page (printout)</td>
                                        <td>Yes</td>
                                        <td>Hindi</td>
                                        <td>2024</td>
                                        <td><a href="https://fsez.gov.in/index.php" target="_blank">https://fsez.gov.in/</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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