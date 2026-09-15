<?php
include("application-top.php");

// $uasql = "select * from fsez_uac_meetings where status = 1 order by added_on desc";
// $uares = mysqli_query($con, $uasql);
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
  <title><?php echo $gbl_row["org_name"]; ?> | BOA Minutes</title>

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
            <li><a href="boa-meeting-agenda.php">BOA</a></li>
            <li class="active"><a href="sez-forms.php">BOA Minutes</a></li>
          </ol>
          <h1><span>BOA </span>Meeting Minutes</h1>
        </div>
      </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <section class="section-padding-lesser-top important-causes">
      <div class="container">
        <div class="row content important-causes-content report">
          <table class="table table-bordered table-hover table-responsive file-list">
            <caption>List of Board of Approval meeting minutes with download links</caption>
            <thead class="thead-dark">
              <tr>
                <th scope="col"><abbr title="Serial number">SL #</abbr></th>
                <th scope="col">BOA Meeting Minutes</th>
                <th class="text-center" scope="col">Date Of Issue</th>
                <th class="text-center" scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="w-5">1</td>
                <td>Minutes of the 131st meeting of the Board of Approval for SEZs held on 28th August, 2025</td>
                <td class="w-15">04-09-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes_of_the_131st_meeting_of_the_BOA_for_SEZ_held_on_28.08.2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">2</td>
                <td>Minutes of the 130th meeting of the Board of Approval for SEZs held on 18th June, 2025</td>
                <td class="w-15">04-08-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes_of_the_130th_meeting_of_the_BOA_on_18.07.2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">3</td>
                <td>Minutes of the 129th meeting of the Board of Approval for SEZs held on 6th June, 2025</td>
                <td class="w-15">13-06-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/129th_Minutes.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">4</td>
                <td>Minutes of the 128th meeting of the Board of Approval for SEZs held on 16th May, 2025</td>
                <td class="w-15">23-05-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/128_boa_mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">5</td>
                <td>Minutes of the 127th meeting of the Board of Approval for SEZs held on 08th April, 2025</td>
                <td class="w-15">10-04-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/127_boa_mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">6</td>
                <td>Minutes of the 126th meeting of the Board of Approval for SEZs held on 24th Jan, 2025</td>
                <td class="w-15">06-03-2025</td>
                <td class="w-15"><a href="repo/boa_minutes/126-boa-mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">7</td>
                <td>Minutes of the 125th meeting of the Board of Approval for SEZs held on 6th December, 2024</td>
                <td class="w-15">12-12-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/125th_BoA_Minutes_1.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              
              <tr>
                <td class="w-5">8</td>
                <td>Minutes of the 124th meeting of the Board of Approval for SEZs held on 5th November, 2024</td>
                <td class="w-15">13-11-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/124th_boa_mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">9</td>
                <td>Minutes of the 123rd meeting of the Board of Approval for SEZs held on 4th October, 2024</td>
                <td class="w-15">08-10-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/123rd_boa_mis.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">10</td>
                <td>Minutes of the 122nd meeting of the Board of Approval for SEZs held on 30th August, 2024</td>
                <td class="w-15">04-09-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/122nd_boa_mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">11</td>
                <td>Minutes of the 121st meeting of the Board of Approval for SEZs held on 31st July, 2024</td>
                <td class="w-15">06-8-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/121st_boa_minutes.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">12</td>
                <td>Addendum to the Minutes of the 120th meeting of the Board of Approval for SEZs held on 18th June, 2024</td>
                <td class="w-15">22-07-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/120th_boa_minutes.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">13</td>
                <td>Minutes of the 120th meeting of the Board of Approval for SEZs held on 18th June, 2024</td>
                <td class="w-15">06-07-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/120th_boa_mins.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">14</td>
                <td>Minutes of the 119th meeting of the Board of Approval for SEZs held on 6th March, 2024</td>
                <td class="w-15">12-03-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 119th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              
              <tr>
                <td class="w-5">15</td>
                <td>Minutes of the 118th meeting of the Board of Approval for SEZs held on 6th February, 2024</td>
                <td class="w-15">20-02-2024</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 118th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">16</td>
                <td>Minutes of the 117th meeting of the Board of Approval for SEZs held on 17th November, 2023</td>
                <td class="w-15">22-11-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 117th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">17</td>
                <td>Minutes of the 116th meeting of the Board of Approval for SEZs held on 5th September, 2023</td>
                <td class="w-15">20-09-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 116th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">18</td>
                <td>Minutes of the 115th meeting of the Board of Approval for SEZs held on 17th June, 2023</td>
                <td class="w-15">26-06-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 115th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">19</td>
                <td>Minutes of the 114th meeting of the Board of Approval for SEZs held on 15th April, 2023</td>
                <td class="w-15">26-04-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 114th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">20</td>
                <td>Minutes of the 113th meeting of the Board of Approval for SEZs held on 17th January & 2nd February, 2023</td>
                <td class="w-15">14-02-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of the 113th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
              </tr>
              <tr>
                <td class="w-5">21</td>
                <td>Minutes of 3rd Meeting of BOA for EOU held 17th June, 2023</td>
                <td class="w-15">17-06-2023</td>
                <td class="w-15"><a href="repo/boa_minutes/Minutes of 3rd Meeting of BOA for EOU.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
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

</body>

</html>
