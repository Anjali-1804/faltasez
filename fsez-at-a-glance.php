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
   <title><?php echo $gbl_row["org_name"]; ?> | FSEZ</title>

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
                  <li><a href="fsez-at-a-glance.php">About FSEZ</a></li>
                  <li class="active" aria-current="page">FSEZ at a Glance</li>
               </ol>
               <br>
               <h1>FSEZ <span>At A Glance</span></h1>
               <p>The Zonal Office of Development Commissioner, Falta SEZ has 
                  jurisdiction over the 12 (twelve) states of West Bengal, Odisha, 
                  Jharkhand, Bihar, Meghalaya, Tripura, Assam, Mizoram, Nagaland, Arunachal Pradesh, 
                  Meghalaya, Sikkim.
               </p>
            </div>
         </div> <!-- end container -->
      </section>
      <!-- end page-title -->

      <!-- start event-single-main-content -->


      <section class="important-causes section-padding-wayless">
         <div class="container">
            <div class="row content important-causes-content report">
               <h2 class="text-center"><span class="table-heading-fsez-at-a-glance">List Of SEZ under Zonal DC, Falta SEZ</span></h2>
               <table class="table table-responsive table-bordered table-hover file-list">
                  <caption>List of Special Economic Zones under the Zonal Development Commissioner, Falta SEZ, grouped by state</caption>
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">State</th>
                        <th scope="col">Name of SEZ</th>
                     </tr>
                  </thead>
                  <tbody class="sez-list">
                     <tr>
                        <td rowspan="7">WEST BENGAL</td>
                        <td><a style="color: black;" href="about-fsez.php">Falta SEZ</a></td>
                     </tr>
                     <tr>
                        <td><a style="color: black;" href="about-manikanchan.php">Manikanchan SEZ</a></td>
                     </tr>
                     <tr>
                        <td><a style="color: black;" href="candor.php">Candor Kolkata One Hi-tech Structure Pvt Ltd SEZ</a></td>
                     </tr>
                     <tr>
                        <td>DLF Ltd (IT/ITES SEZ)</td>
                     </tr>
                     <tr>
                        <td>Tata Consultacy Services SEZ</td>
                     </tr>
                     <tr>
                        <td>Wipro SEZ</td>
                     </tr>
                     <tr>
                        <td>Kolkata IT Park SEZ</td>
                     </tr>
                     <tr>
                        <td>JHARKHAND </td>
                        <td>Adani Power Ltd SEZ</td>
                     </tr>
                     <tr>
                        <td rowspan="6">ODISHA</td>
                        <td>Vedanta Ltd SEZ</td>
                     </tr>
                     <tr>
                        <td>Tata Steel SEZ</td>
                     </tr>
                     <tr>
                        <td>Saraf Agencies Pvt Ltd SEZ</td>
                     </tr>
                     <tr>
                        <td>Orissa Industrial Infrastructure Development Corporation (IDCO) (IT/ITES SEZ)</td>
                     </tr>
                     <tr>
                        <td>Orissa Industrial Infrastructure Development Corporation
                           (IDCO) IT Knowledge Park</td>
                     </tr>
                     <tr>
                        <td>Heterogeneous Integration Packaging Solutions Private Limited SEZ</td>
                     </tr>
                     <tr>
                        <td>MANIPUR</td>
                        <td>Manipur IT SEZ Project Development Company Ltd.</td>
                     </tr>
                     <tr>
                        <td>NAGALAND</td>
                        <td>Nagaland Industrial Development Corporation Limited</td>
                     </tr>
                
                     <tr>
                        <td>TRIPURA</td>
                        <td>Tripura Industrial Development Corporation Limited</td>
                     </tr>
                     <tr>
                        <td>SIKKIM</td>
                        <td>Department of Information Technology, Sikkim</td>
                     </tr>
                     <tr>
                        <td>ARUNACHAL</td>
                        <td>Department of Trade and Commerce, Arunachal Pradesh</td>
                     </tr>
                     <tr>
                        <td rowspan="2">BIHAR</td>
                        <td>Nawanagar, Buxar, Multi- Sector SEZ</td>
                     </tr>
                     <tr>
                        <td>Kumarbagh, West Champaran, Multi- SEZ</td>
                     </tr>
                  </tbody>
               </table>
            </div> <!-- end row -->
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
