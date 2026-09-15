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
    <title><?php echo $gbl_row["org_name"]; ?> | Contact</title>

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

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper contact-page">

        <!-- Start header -->
        <?php include("includes/header.php"); ?>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="repo page-title">
            <!-- <div class="page-title-bg"></div> -->
            <div class="container">
                <div class="title-box">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active" aria-current="page">Contact Us</li>
                    </ol>
                    <h1><span>Contact </span>FSEZ</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start contact-main-content -->
        <section class="contact-main-content section-padding-wayless">
          <div class="container">
            <div class="row contact-info">
              <div class="col col-md-4">
                <div class="row extra-margin">
                  <div class="col col-sm-12">
                    <div class="wow slideInUpSlow">
                      <span class="icon">
                        <i class="fa fa-map-marker"></i>
                      </span>
                      <h3>Address</h3>
                      <p><b>Falta Special Economic Zone</b><br>Ministry of Commerce & Industry,<br>Department of Commerce <br>2<sup>nd</sup> MSO Building, 4<sup>th</sup> Floor, Nizam Palace<br>234/4, AJC Bose Road, Kolkata,<br>West Bengal - 700020 </p>
                    </div>
                  </div>
                  <div class="col col-sm-12">
                    <div class="wow slideInUpSlow" data-wow-delay="0.2s">
                      <span class="icon">
                        <i class="fa fa-envelope-o"></i>
                      </span>
                      <h3>Email</h3>
                      <p>fsez@nic.in</p>
                    </div>
                  </div>
                  <div class="col col-sm-12">
                    <div class="wow slideInUpSlow" data-wow-delay="0.4s">
                      <span class="icon">
                        <i class="fa fa-phone"></i>
                      </span>
                      <h3>Phone</h3>
                      <p>(033) 2287-2263 <br>(033) 2287-4092 <br>(033) 2287-3362</p>
                    </div>
                  </div>
                  <div class="col col-sm-12">
                    <div class="wow slideInUpSlow" data-wow-delay="0.4s">
                      <span class="icon">
                        <i class="fa fa-fax"></i>
                      </span>
                      <h3>Fax</h3>
                      <p>91-33-2287-3362</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-md-8">
                <div class="row">
                  <div class="col col-md-12">
                    <div class="right-col">
                      <div class="company">
                        <h3><span>Falta SEZ </span>Point of Contact</h3>
                        <!-- <span>Making the world a better place</span> -->
                      </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            DC / DDC / DCC / SAO 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse panel-collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                      <table class="table">
                                          <caption>List of Falta SEZ points of contact with designation, email and contact number</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                             // Pass the designation ids in cdata variable not the sequence no.
                                              $cdata = "1,2,3,6,4,19,18,23";
                                              echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            ACC / ADC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse panel-collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                    <table class="table">
                                          <caption>Contact details of ACC and ADC officers</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <--?php
                                              $cdata = "14,5";
                                              echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                      </div>
                                </div>
                            </div> -->
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Sr. Stenographer/Assistant/UDC/LDC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse panel-collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                          <table class="table">
                                          <caption>Contact details of Senior Stenographer, Assistant, UDC and LDC staff</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <--?php
                                              $cdata = "7,8,9,10";
                                              echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                              </div> -->
                               <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            SoC/Authorized Officer
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse panel-collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                          <table class="table">
                                          <caption>Contact details of SoC and Authorized Officers</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <--?php
                                              // $cdata = "11,12,17";
                                              $cdata = "11,12";
                                              echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Preventive / Authorized Officer
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="collapse panel-collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                          <table class="table">
                                          <caption>Contact details of Preventive and Authorized Officers</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <--?php
                                              $cdata = "13";
                                              echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Specified Officer (Additional Charge)/Examiner
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="collapse panel-collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                          <table class="table">
                                          <caption>Contact details of the Specified Officer holding additional charge and Examiner</caption>
                                          <thead class="thead-dark">
                                              <tr>
                                              <th scope="col">Name</th>
                                              <th scope="col">Designation</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Contact</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <--?php
                                              // $cdata = "15,16";
                                              // echo show_contacts($cdata);
                                              ?>
                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- end right-col -->
                    <!-- Start Sidebar
        						<!- ?php include("includes/sidebar.php"); ?>
                    End Sidebar -->
                  </div>
                </div>
              </div>
              <!-- end contact info -->
            </div>
          </div>
          <!-- end container -->
          <div class="row map-concate-form">
            <div class="col col-xs-12">
              <!-- <div class="map" id="map"></div> -->
              <iframe title="Map showing Falta Special Economic Zone Gate No. 1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7700.290424369523!2d88.09922139571367!3d22.275915503105377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a028b9e7cccaaf9%3A0x7d47f69143f22133!2sFSEZ%20Gate%20No.1!5e0!3m2!1sen!2sin!4v1582913216565!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- <div class="contact-form">
              <div class="container">
                <div class="row wow bounceInUp">
                  <div class="col col-md-10 col-md-offset-1 form-inner">
                    <h3>Contact Us</h3>
                    <form class="form row" id="contact-form">
                      <div class="col col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="your name..">
                      </div>
                      <div class="col col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="your email..">
                      </div>
                      <div class="col col-md-12">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="subject..">
                      </div>
                      <div class="col col-md-12">
                        <textarea class="form-control" name="message" id="message" placeholder="write here.."></textarea>
                      </div>
                      <div class="col col-md-12">
                        <button type="submit" class="bnt theme-btn">Send</button>
                        <span id="loader">
                          <img src="images/contact-ajax-loader.gif" alt="Loader">
                        </span>
                      </div>
                      <div class="col col-md-12">
                        <div id="success">Your message has been sent successfully!!!</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </section>
        <!-- end contact-main-content -->


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
    <script src="js/script.js"></script>
</body>
</html>
