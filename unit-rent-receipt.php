<?php
include("application-top.php");
include("includes/payment-gateway.php");

/* Fetching the client settings for rent payment */
$isRentEnabled = new ClientSettings();

/* Payment Form Submission */
if (isset($_POST['donation_payment'])) {
    $amount = $_POST['payeramount'];
    $payer_name = $_REQUEST['payername'];
    $payer_email = $_REQUEST['payeremail'];
    $payer_phone = $_REQUEST['payerphone'];
    $rnquarter = $_REQUEST["rentQr"];
    $rnyear = $_REQUEST["rentYr"];
    $company_id = $_REQUEST["company_id"];
    $rent_status_id = $_REQUEST["rent_status_id"];
    $reference_no = rand();
    $optionalField = $payer_name . '|' . $payer_phone;
    $eazypay_integration = new Eazypay($isRentEnabled);
    $payment_url = $eazypay_integration->getPaymentUrl($amount, $reference_no, $payer_email,  $rnyear,  $rnquarter, $optionalField);
    $paysql = "insert into fsez_rent_payments (rent_status_id, company_id, payer_email, referenceNo, transaction_amount, transaction_status, transaction_initiated_on) values ('$rent_status_id', '$company_id', '$payer_email', '$reference_no', '$amount', 'Pending', NOW())";
    $payres = mysqli_query($con, $paysql);
    if ($payres) {
       header('Location: ' . $payment_url);
       exit();
    }
}
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
    <title><?php echo $gbl_row["org_name"]; ?> | Unit Rent Invoice</title>

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


        <div class="download_receipe_section ">
            <div class="container">
                <div class="download_receipe_area">
                    <div class="row align-items-end d-flex">
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 dnbx">
                            <h1 class="heading_dwnlod">download Quarterly Rent Invoice</h1>
                            <form id="rentalForm">
                                <div class="row d-flex flex-wrap m-0">
                                    <div class="col-md-12 col-sm-12  col-xs-12 dn_inbx">
                                        <div class="frm_area">
                                            <label class="sr-only" for="company">Unique Unit code</label>
                                            <input type="text" required aria-required="true" name="company" id="company" placeholder="Please enter your 10 character Unique Unit code" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12   dn_inbx">
                                        <div class="frm_area pe-0">
                                            <label class="sr-only" for="rentYear">Rent year</label>
                                            <select required aria-required="true" id="rentYear" name="rentYear">
                                                <option disabled value selected>Select Year</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12  dn_inbx">
                                        <div class="frm_area">
                                            <label class="sr-only" for="rentQuarter">Rent quarter</label>
                                            <select required aria-required="true" id="rentQuarter" name="rentQuarter">
                                                <option disabled value selected>Select Quarter</option>
                                                <option value="1">Quarter 1</option>
                                                <option value="2">Quarter 2</option>
                                                <option value="3">Quarter 3</option>
                                                <option value="4">Quarter 4</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12  col-sm-12 dn_inbx pos-static">
                                        <!-- Icon-only search button: the label lives in aria-label because a
                                             visible value would overprint the magnifier background image. -->
                                        <input type="submit" value="" aria-label="Get rent status" />
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 dnbx">
                            <div class="reciept_form_box reciept_no_box" id="nodata" style="display: none;" role="alert">
                                <h5>Incorrect data provided.</h5>
                                <h4>No record found</h4>
                            </div>

                            <div class="reciept_form_box" id="rentdata" style="display:none">
                                <h5 id="cmpName"></h5>
                                <h4>Total Dues For <span id="qr"></span> <span id="yr"></span></h4>
                                <h3 class="price_txt" id="amt">₹</h3>
                                <form onsubmit="return validateForm()" method="post" action="" id="paymentform">
                                    <a target="_blank" id="statement" class="dwnld_rcpt"><img src="images/file.png" alt="" /> Download Rent Invoice</a>
                                    <div class="form_box">
                                        <label for="payername">Company Name: <span class="red" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                        <input type="text" placeholder="Company Name" id="payername" name="payername" required aria-required="true" readonly />
                                    </div>
                                    <div class="form_box">
                                        <label for="payeremail">Email id: <span class="red" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                        <input type="email" placeholder="Company Email" id="payeremail" name="payeremail" required aria-required="true" readonly />
                                    </div>
                                    <input type="hidden" name="rentQr" id="rentQr">
                                    <input type="hidden" name="rentYr" id="rentYr">
                                    <input type="hidden" name="payerphone" id="payerphone">
                                    <input type="hidden" name="rent_status_id" id="rent_status_id">
                                    <input type="hidden" name="company_id" id="company_id">
                                    
                                    <div class="form_box">
                                        <label for="amount">Amount </label>
                                        <input type="number" placeholder="Amount" min="0" id="amount" name="payeramount" required aria-required="true" />
                                    </div>
                                    <div class="form_box submitbx">
                                        <input name="donation_payment" id="paynow" type="submit" value="Pay Amount" />
                                    </div>
                                    <span class="text-danger isPaid" role="alert">* Rent is already paid for the selected Quarter.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="mb-0 shape-design">
                <img src="images/hero.svg" class="w-100" alt="">
            </figure>
            <figure class="mb-0 shape-design2">
                <img src="images/bg-1.png" class="w-100" alt="">
            </figure>
        </div>

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

    <script>
        $(function() {

            $("#rentalForm").on("submit", function(e) {
                e.preventDefault();

                var company = $("#company").val();
                var rentYear = $("#rentYear").val();
                var rentQuarter = $("#rentQuarter").val();

                var formData = new FormData($('#rentalForm')[0]);
                formData.append("company", company);
                formData.append("rentYear", rentYear);
                formData.append("rentQuarter", rentQuarter);
                let totalRentAmt;
                $.ajax({
                    type: 'POST',
                    url: 'get-rent-status.php',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.length > 0) {
                            rentalForm.reset();
                            $("#rentdata").show();
                            $(".isPaid").hide();
                            $("#cmpName").html(response[0].company_name);
                            $("#payername").val(response[0].company_name);
                            $("#payeremail").val(response[0].company_email);
                            $("#payerphone").val(response[0].company_phoneNumber);
                            $("#rentYr").val(response[0].rent_paid_of_year);
                            $("#rentQr").val(response[0].rent_paid_of_quarter);
                            $("#rent_status_id").val(response[0].rent_status_id);
                            $("#company_id").val(response[0].company_id);      
                            totalRentAmt = Number(response[0].rent_amount) + Number(response[0].previous_due_amount);
                            $("#amount").val(Number(totalRentAmt).toFixed(2));
                            $("#qr").html(response[0].rent_paid_of_quarter + 'Q');
                            $("#yr").html(response[0].rent_paid_of_year + 'Y');
                            $("#amt").html('<i class="fa fa-inr"></i> ' + Number(totalRentAmt).toFixed(2));
                            $("#statement").attr('href', 'admin/upload_rent_documents/' + response[0].rent_status_file_name);
                            $("#nodata").hide();
                            if(response[0].is_rent_paid == '1') {
                                $("#paynow").attr("disabled", true);
                                $(".submitbx").hide();
                                $(".isPaid").show();
                            }
                        } else {
                            rentalForm.reset();
                            $("#rentdata").hide();
                            $("#nodata").show();
                        }
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });

            });
        });

        function validateForm() {
            var amount = Math.ceil($("#amount").val());
            if (amount <= 0) {
                alert("Amount should be a greater than Rs.0");
                return false;
            }
        }
    </script>
</body>

</html>
