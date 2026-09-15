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
    <title><?php echo $gbl_row["org_name"]; ?> | Unit Registration</title>

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


<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper event-single-page">

        <!-- Start header -->
        <?php include("includes/header.php"); ?>
        <!-- end of header -->

        <section class="form-v4">
            <div class="container">
                <div class="page-content">
                    <div class="form-v4-content">
                        <div class="form-left">
                            <h1>FALTA SEZ <span class="sr-only">Unit Registration</span></h1>
                            <p class="text-1">Welcome to the <span>Falta SEZ - Unit Administration</span> section. This registration will enable your Unit to avail various online services via Unit Dashboard. Please enter the Unit specific LOA number below to proceed.</p>
                            <form id="loaForm" method="post">
                                <div class="form-row">
                                    <label for="loa_number">Enter Unit LOA Number</label>
                                    <input type="text" name="loa_number" id="loa_number" class="input-text" required aria-required="true">
                                </div>
                                <div class="form-left-last">
                                    <input type="submit" name="account" class="account" value="Proceed">
                                </div>
                            </form>
                            <p class="text-2"><span>Please Note: </span> The form will be auto filled with the information already available with us. Kindly check all the fields before submitting. You will receive an email communication on the specified email Id with login information once verification is complete.</p>
                        </div>
                        <form class="form-detail" action="#" method="post" id="unitForm">
                            <h2>UNIT REGISTRATION FORM</h2>
                            <div class="form-group">
                                <div class="form-row form-row-2">
                                    <label for="company_name">Unit Name</label>
                                    <input type="text" readonly name="company_name" id="company_name" class="input-text text_upper">
                                </div>
                                <div class="form-row form-row-3">
                                    <label for="company_email">Unit Email</label>
                                    <input type="text" name="company_email" id="company_email" class="input-text" required aria-required="true" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row form-row-3">
                                    <label for="company_id_type">Company ID Type</label>
                                    <select name="company_id_type" id="company_id_type" class="select-type">
                                        <option value="" selected="selected">-- Select --</option>
                                        <option value="CIN">CIN Number</option>
                                        <option value="IEC">IEC Number</option>
                                    </select>
                                </div>
                                <div class="form-row form-row-2" id="comp_cin" style="display: none;">
                                    <label for="company_cin">Company CIN</label>
                                    <input type="text" name="company_cin" id="company_cin" class="input-text text_upper" maxlength="21" aria-required="true">
                                </div>
                                <div class="form-row form-row-2" id="comp_iec" style="display: none;">
                                    <label for="company_iec">Company IEC</label>
                                    <input type="text" name="company_iec" id="company_iec" class="input-text text_upper" maxlength="21" aria-required="true">
                                </div>
                                <div class="form-row form-row-2">
                                    <label for="company_phoneNumber">Authorised Contact Number</label>
                                    <input type="number" name="company_phoneNumber" id="company_phoneNumber" class="input-text" maxlength="10" aria-required="true">
                                </div>
                            </div>
                            <input type="hidden" id="company_loa_status" name="company_loa_status">
                            <input type="hidden" id="company_loa_number" name="company_loa_number">
                            <div class="form-row">
                                <label for="company_address">Unit Address</label>
                                    <input type="text" required aria-required="true" name="company_address" id="company_address" class="input-text">
                            </div>
                            <div class="form-checkbox">
                                <label class="container">
                                    <p>For more information kindly refer to the <a href="circulars-and-policies.php" class="text">Circular</a> published by Falta SEZ.</p>
                                    <!--<input type="checkbox" name="termsAnCon" id="termsAnCon">
                                    <span class="checkmark"></span> -->
                                </label>
                            </div>
                            <div class="form-row-last">
                                <input type="submit" name="register" class="register" value="Finish Registration">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <figure class="mb-0 shape-design">
                <img src="./images/hero.svg" class="w-100" alt="">
            </figure>
            <figure class="mb-0 shape-design2">
                <img src="./images/bg-1.png" class="w-100" alt="">
            </figure>
        </section>
        <!-- start footer -->
        <?php include("includes/footer.php"); ?>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->

    <!-- Error Modal for Invalid LOA Number -->
    <div class="loa_error modal" id="invalidLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="" />
        <span class="title text-center">Invalid LOA Number!</span>
        <p class="text-center">The LOA Number you entered is not recognized. Please retry or contact Falta SEZ support.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Error Modal for Duplicate regsitration  -->
    <div class="loa_error modal" id="duplicateLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="" />
        <span class="title text-center">Duplicate Registration Request!</span>
        <p class="text-center">The LOA Number is already registered with Falta SEZ.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Error Modal for regsitration  -->
    <div class="loa_error modal" id="errorLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="" />
        <span class="title text-center">Something went wrong!</span>
        <p class="text-center">Something is not correct, please try again after sometime.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Sucess Modal after form submission -->
    <div id="successModal" class="modal">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i class="fa fa-check fa-2xl"></i>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Success!</h4>
                    <p>Your registration has been sent successfully to FSEZ Admin for approval.</p>
                    <button class="btn btn-success" data-dismiss="modal"><span>Close & Return</span></button>
                </div>
            </div>
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
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/validator.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $("#loaForm").on("submit", function(e) {
                e.preventDefault();
                let loa_number = $("#loa_number").val();
                let counter = 0;
                $.ajax({
                    url: 'js/unit-list.json',
                    type: "GET",
                    dataType: 'JSON',
                    success: function(data) {
                        for (n of data) {
                            if (n.loa_number.toLowerCase() == loa_number.toLowerCase()) {
                                $('#company_name').val(n.unit_name);
                                $('#company_address').val(n.unit_address);
                                $('#company_email').val(n.unit_email);
                                $('#company_loa_status').val(n.unit_status);
                                $('#company_loa_number').val(n.loa_number);
                                break;
                            } else {
                                counter++;
                                if (counter == data.length) {
                                    $("#invalidLoa").modal('show');
                                    $("#loaForm").trigger('reset');
                                }
                            }
                        }
                        $("#loaForm").trigger('reset');
                    },
                    error: function(err) {
                        console.log(err);
                    }

                });
                return false;
            });

            $("#unitForm").on("submit", function(e) {
                e.preventDefault();
                let company_name = $('#company_name').val();
                let company_address = $('#company_address').val();
                let company_email = $('#company_email').val();
                let company_loa_number = $('#company_loa_number').val();
                let company_loa_status = $('#company_loa_status').val();
                let company_id_type = $('#company_id_type').val() ? $('#company_id_type').val() : "";
                let company_iec = $('#company_iec').is(":visible") ? $('#company_iec').val() : "";
                let company_cin = $('#company_cin').is(":visible") ? $('#company_cin').val() : "";

                let unitFormData = new FormData($("#unitForm")[0]);

                unitFormData.append('company_name', company_name);
                unitFormData.append('company_address', company_address);
                unitFormData.append('company_email', company_email);
                unitFormData.append('company_loa_number', company_loa_number);
                unitFormData.append('company_loa_status', company_loa_status);
                unitFormData.append('company_cin', company_cin);
                unitFormData.append('company_id_type', company_id_type);
                unitFormData.append('company_iec', company_iec);

                let isValid = checkFormStatus("unitForm");

                if (isValid) {
                    $.ajax({
                        type: "POST",
                        url: "includes/register-unit.php",
                        data: unitFormData,
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(res) {
                            console.log(res)
                            if (res.includes('0')) {
                                $("#successModal").modal('show');
                                $("#unitForm").trigger('reset');
                            } else if (res == 2) {
                                $("#duplicateLoa").modal('show');
                                $("#unitForm").trigger('reset');
                            } else {
                                $("#errorLoa").modal('show');
                                $("#unitForm").trigger('reset');
                                console.log('Something went wrong.');
                            }
                        },
                        error: function(e) {
                            $("#errorLoa").modal('show');
                            $("#unitForm").trigger('reset');
                        }
                    });
                }

            });

            $("#company_id_type").on('change', function() {
                let compType = $(this).val();
                if (compType != undefined && (compType != "" || compType != null)) {
                    if (compType.toLowerCase() === 'cin') {
                        $("#comp_cin").show();
                        $("#company_cin").attr('required', true);
                        $("#comp_iec").hide();
                        $("#company_iec").removeAttr('required');
                    } else if (compType.toLowerCase() === 'iec') {
                        $("#comp_iec").show();
                        $("#company_iec").attr('required', true);
                        $("#comp_cin").hide();
                        $("#company_cin").removeAttr('required');
                    }
                }
            })
        });
    </script>
</body>

</html>
