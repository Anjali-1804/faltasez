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
    <title><?php echo $gbl_row["org_name"]; ?> | RTI - Transparency Audit</title>

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
                        <li class="active" aria-current="page">RTI</li>
                    </ol>
                    <h1><span>Transparency </span>Audit</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start event-single-main-content -->
        <section class="event-single-main-content">
            <div class="container">
                <div class="row about-event-wrapper">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col col-md-12">
                                <div class="about-event">
                                    <div class="content added-margin-top">
                                        <h4>1. Organisation & Function</h4>
                                    </div>      
                                    <div class="content added-margin">
                                        <h5>1.1 Particular of its Organisation, functions and duties</h5>
                                        <p>The office of the Development Commissioner, Falta SEZ has been established in the FY1984-85 under Ministry 
                                            of Commerce & Industry, Government of India to look after the export promotion activities of various items
                                             by organizations that came up in the FSEZ area covering 280 acres. Falta SEZ has implemented eOffice.</p>

                                        <p><b>Vision:</b> Falta Special Economic Zone, popularly known as FEPZ aims at providing an internationally Competitive and hassle-free environment for investment in export production. </p>
                                        <p><b>Mission:</b> To cater to the needs of the SEZ and 100% EOUs set up in West Bengal, Odisha, Jharkhand, Bihar, Nagaland, Tripura, Manipur, Assam, Meghalaya, Sikkim, Mizoram and Arunachal Pradesh. 
                                        <p><b>Key Objectives:</b> SEZ objectives include generation of additional economic activity, Forex, promotion of exports of goods and services, promotion of investment from domestic and foreign sources, creation of employment opportunities and development of infrastructure facilities.</p>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Power and duties of its officers and employees.pdf" target="_blank">1.2 Power and duties of its officers and employees </a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/The procedure follows in decision making by this office including channels of supervision and accountability.pdf" target="_blank">1.3 The procedure follows in decision making by this office including channels of supervision and accountability</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Norms for Discharge of Functions.pdf" target="_blank">1.4 Norms for discharge of functions</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/FSEZ - Norms Rules Regulation Manuals and Instructions.pdf" target="_blank">1.5 Rules, regulations, instructions manual and records for discharging functions</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Categories of documents held by the authority under its control.pdf" target="_blank">1.6 Categories of documents held by the authority under its control</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Channels of Supervision and Accountability.pdf" target="_blank">1.7 Channels of Supervision and Accountability</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/CONTACT_LIST.pdf" target="_blank">1.8 Directory of FSEZ Officers and Staffs</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Pay Grade and Allocated Budget.pdf" target="_blank">1.9 Monthly Remuneration received by officers & employees including system of compensation</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="right-to-information.php" target="_blank">1.10 Name, designation and other particulars of public information officers</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Disciplinary action has been proposed or taken against employees.pdf" target="_blank">1.11 No. of employees against whom Disciplinary action has been proposed/ taken</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Programmes to advance understanding of RTI.docx" target="_blank">1.12 Programmes to advance understanding of RTI</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Transfer policy and transfer orders.pdf" target="_blank">1.13 Transfer policy and transfer orders</a></h5>
                                    </div>
                                    <div class="content added-margin-top">
                                        <h4>2. Budget & Programme</h4>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Budget Allocation.pdf" target="_blank">2.1 Budget allocated to each agency including all plans, proposed expenditure and reports on disbursements made etc</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Foreign and Domestic Tours.pdf" target="_blank">2.2 Foreign and domestic tours</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="subsidy-program.php" target="_blank">2.3 Subsidy programmes, including the amounts allocated and the details of beneficiaries</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Discretionary and non-discretionary grants.pdf" target="_blank">2.4 Discretionary and non-discretionary grants</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Particulars of recipients of concessions, permits of authorizations granted by the public authority.pdf" target="_blank">2.5 Particulars of recipients of concessions, permits of authorizations granted by the public authority</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Status of the Audit Comments to ATN regarding various paras of CAG Report.pdf" target="_blank">2.6 CAG & PAC paras</a></h5>
                                    </div> 
                                    <div class="content added-margin-top">
                                        <h4>3. Publicity Band Public interface</h4>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Particulars for any arrangement for consultation by the members of the public in relation to the formulation of policy or implementation.pdf" target="_blank">3.1 Particulars for any arrangement for consultation by the members of the public in relation to the formulation of policy or implementation</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Details of policies, decisions, which affect public, informed to them.pdf" target="_blank">3.2 Are the details of policies / decisions, which affect public, informed to them</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Dissemination of information accessible to the public.pdf" target="_blank">3.3 Dissemination of information widely and in such form and manner which is easily accessible to the public</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Form of accessibility of information manual handbook.pdf" target="_blank">3.4 Form of accessibility of information manual or handbook.</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Whether information manual handbook available free of cost or not.pdf" target="_blank">3.5 Whether information manual or handbook available free of cost or not</a></h5>
                                    </div>
                                    <div class="content added-margin-top">
                                        <h4>4. E-Governance</h4>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Language in which Information Manual Handbook Available.pdf" target="_blank">4.1 Language in which Information Manual/Handbook Available</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/When was the information Manual Handbook last updated.pdf" target="_blank">4.2 When was the information Manual/Handbook last updated</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Information available in electronic form.pdf" target="_blank">4.3 Information available in electronic form</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Particulars of facilities available to citizen for obtaining information.pdf" target="_blank">4.4 Particulars of facilities available to citizen for obtaining information</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Such other information as may be prescribed under section 4(i) (b)(xvii).pdf" target="_blank">4.5 Such other information as may be prescribed under section 4(i) (b)(xvii)</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Receipt & Disposal of RTI applications & appeals.pdf" target="_blank">4.6 Receipt & Disposal of RTI applications & appeals</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Parliament Questions and Answers.pdf" target="_blank">4.7 Replies to questions asked in the parliament</a></h5>
                                    </div> 
                                    <div class="content added-margin-top">
                                        <h4>5. Information as may be prescribed</h4>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Such other information as may be prescribed under Section 5.1.pdf" target="_blank">5.1 Such other information as may be prescribed [F.No. 1/2/2016-IR dt. 17.8.2016, F No. 1/6/2011-IR dt. 15.4.2013]</a></h5>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Details of Contracts of General Admin.pdf" target="_blank">5.5 Details of Contracts of General Admin</a></h5>
                                    </div> 
                                    <div class="content added-margin-top">
                                        <h4>6. Information Disclosed on own Initiative</h4>
                                    </div>
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Item or information disclosed so that public have minimum resort to use of RTI Act to obtain information.pdf" target="_blank">6.1 Item / information disclosed so that public have minimum resort to use of RTI Act to obtain information</a></h5>
                                    </div> 
                                    <div class="content added-margin">
                                        <h5><a href="repo/rti/Guidelines for Indian Government Websites (GIGW).pdf" target="_blank">6.2 Guidelines for Indian Government Websites (GIGW)</a></h5>
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
