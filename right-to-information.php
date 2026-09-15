<?php
include("application-top.php");

$rsql = "select * from fsez_rti where status = 1 order by added_on desc";
$rres = mysqli_query($con, $rsql);
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
    <title><?php echo $gbl_row["org_name"]; ?> | RTI - Point of Contact</title>

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
                        <li class="active" aria-current="page">RTI Point of Contact</li>
                    </ol>
                    <h1><span>RTI </span>- Point of Contact</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start event-single-main-content -->
        <section class="event-single-main-content">
            <div class="container">
                <div class="row about-event-wrapper section-padding-lesser-top">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col col-md-12">
                                <h4><i class="fa fa-info-circle"></i> File RTI Applications/First Appeal: <a href="https://rtionline.gov.in" target="_blank" rel="noopener noreferrer">RTI Online Portal</a></h4>
                            </div>
                            <div class="col col-md-6">
                                <div class="about-event">
                                    <!-- <h2>Right To Information (RTI)</h2> -->
                                    <div class="content">
                                        <h4>Public Authority</h4>
                                        <p>Development Commissioner<br> Falta Special Economic Zone <br>Email: fsez[at]nic[dot]in | Contact: (033) 2281-3117</p>

                                        <h4>Appellate Authority (AA)</h4>
                                        <p>Shri Parthasarthi Ghosh<br> Dy. Development Commissioner <br>Email: pghosh[dot]fsez[at]gov[dot]in <br>Contact: +91 9830427767</p>

                                        <h4>Nodal Central Public Information Officer (NCPIO)</h4>
                                        <p>Smt Debjani Ghosh<br> Assistant Development Commissioner<br> Email: dghosh[dot]fsez[at]nic[dot]in | Contact: +91 98831 40041</p>
                                    </div>
                                    <!-- <div class="join keep-left">
                                        <a href="" class="btn theme-btn btn-orange" data-toggle="modal" data-target="#grievanceModal">Submit Grievance</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="about-event">
                                    <!-- <h2>Right To Information (RTI)</h2> -->
                                    <div class="content">
                                        <h4>Transparency Officer</h4>
                                       <p><br>Deputy Development Commissioner/Assistant Development Commissioner, FSEZ <br></p> 
					<h4>Central Public Information Officers</h4>
					<p>Deputy Commissioner of Customs/Superintendents of Customs (Specified Officers) and Assistant Development Commissioners will act as Central Public Information Officers (CPIO) of this office</p>

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

    <!-- Grievance Submit Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="grievanceModal">
        <div class="modal-dialog modal-full-width" role="document">
            <div class="modal-content modal-full-width">
                <div class="modal-body">
                    <div class="content">
                        <div class="container">
                            <div class="row align-items-stretch no-gutters grievance-wrap form-detail">
                                <div class="col-md-12">
                                    <div class="form h-100">
                                        <h2>Submit Your Grievance</h2>
                                        <form class="mb-5" method="post" id="grievanceForm" name="grievanceForm" enctype="multipart/form-data" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-3 form-group mb-5">
                                                    <label for="name" class="col-form-label">Name <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                                    <input type="text" class="form-control" name="name" id="name" aria-required="true" placeholder="Your name">
                                                </div>
                                                <div class="col-md-3 form-group mb-5">
                                                    <label for="email" class="col-form-label">Email <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                                    <input type="text" class="form-control" name="email" id="email" aria-required="true" placeholder="Your email">
                                                </div>
                                                <div class="col-md-3 form-group mb-5">
                                                    <label for="phone" class="col-form-label">Contact <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                                    <input type="text" class="form-control" name="phone" id="phone" aria-required="true" placeholder="Phone #">
                                                </div>
                                                <div class="col-md-3 form-group mb-5">
                                                    <label for="company" class="col-form-label">Company</label>
                                                    <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group mb-5">
                                                    <label for="subject" class="col-form-label">Subject <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                                    <input type="text" class="form-control" name="subject" id="subject" aria-required="true" placeholder="Grievance summary">
                                                </div>
                                                <div class="col-md-6 form-group mb-5">
                                                    <label for="grievance_file_name" class="col-form-label">Attach Relevant File(s)</label>
                                                    <input class="form-control" type="file" name="grievance_file_name[]" accept="application/pdf,image/*" onchange="validateFile(id)" id="grievance_file_name" multiple />
                                                    <span id="fileError" class="text-danger" style="display: none;" role="alert">Invalid file type. Only JPEG, JPG, PNG and PDF files are allowed.</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group mb-5">
                                                    <label for="message" class="col-form-label">Message <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4" aria-required="true" placeholder="Write your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <input type="submit" value="Submit Grievance" class="btn btn-primary rounded-0 py-2 px-4">
                                                    <div id="form-message-warning" role="alert"></div>
                                                    <div id="form-message-success" style="display:none;" role="status">
                                                        Your grievance was submitted, thank you!
                                                    </div>
                                                    <span class="submitting"></span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="preloader" style="display: none;">
        <div class="middle">
            <i class="fi flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
        </div>
    </div>

    <!-- All JavaScript files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="js/script.js"></script>
    <script src="js/validator.js"></script>

    <script type="text/javascript">
        /* File Type Validation */

        function validateFile(id) {
            var formData = new FormData();

            var cfile = document.getElementById(id).files[0];

            formData.append("Filedata", cfile);
            var extn = cfile.type.split("/").pop().toLowerCase();
            if (extn != "jpeg" && extn != "jpg" && extn != "png" && extn != "pdf") {
                $("#fileError").show();
                document.getElementById(id).value = "";
                return false;
            } else {
                $("#fileError").hide();
            }
            return true;
        }


        jQuery(document).ready(function($) {
            $("#grievanceForm").on('submit', function(e) {
                e.preventDefault();

                let name = $("#name").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let company = $("#company").val();
                let subject = $("#subject").val();
                let message = $("#message").val();
                let fileNum = $('input[type=file]')[0].files.length;

                var grievanceFormData = new FormData($('#grievanceForm')[0]);

                grievanceFormData.append("name", name);
                grievanceFormData.append("email", email);
                grievanceFormData.append("phone", phone);
                grievanceFormData.append("company", company);
                grievanceFormData.append("subject", subject);
                grievanceFormData.append("message", message);

                if (fileNum > 0) {
                    for (let i = 0; i < fileNum; i++) {
                        grievanceFormData.append("grievance_file_name[]", $('input[type=file]')[0].files[i]);
                    }
                } else {
                    grievanceFormData.delete("grievance_file_name[]");
                }

                let isValid = checkFormStatus("grievanceForm");

                if (isValid) {
                    $.ajax({
                        type: "POST",
                        url: 'includes/add-grievances.php',
                        data: grievanceFormData,
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                           $(".preloader").show();
                        },
                        success: function(response) {
                            if (response.includes('0')) {
                                $(".preloader").hide();
                                $("#form-message-success").css('margin-top', '22px').css('font-weight', '600').show().fadeOut(5000);
                                grievanceForm.reset();
                                setTimeout(() => {
                                    $("#grievanceModal").modal('hide');
                                    location.reload();
                                }, 5000);
                            } else {
                                $(".preloader").hide();
                                grievanceForm.reset();
                                $("#form-message-warning").html('Error Occured : ' + response).css('display', 'inline-block').css('margin-top', '22px').css('font-weight', '600').show().fadeOut(5000);
                                setTimeout(() => {
                                    $("#grievanceModal").modal('hide');
                                    location.reload();
                                }, 5000);
                            }
                        },
                        error: function(e) {
                            $(".preloader").hide();
                            $("#form-message-warning").html('Error Occured : ' + e.status + ' ' + e.statusText).css('display', 'inline-block').css('margin-top', '22px').css('font-weight', '600').show().fadeOut(5000);
                            grievanceForm.reset();
                            setTimeout(() => {
                                $("#grievanceModal").modal('hide');
                                location.reload();
                            }, 5000);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
