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
    <title><?php echo $gbl_row["org_name"]; ?> | BOA Agenda</title>

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
                        <li class="active"><a href="sez-forms.php">BOA Agenda</a></li>
                    </ol>
                    <h1><span>BOA </span>Meeting Agenda</h1>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <section class="section-padding-lesser-top important-causes">
            <div class="container">
                <div class="row content important-causes-content report">
                    <table class="table table-bordered table-hover table-responsive file-list">
                        <caption>List of Board of Approval meeting agenda documents with download links</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"><abbr title="Serial number">SL #</abbr></th>
                                <th scope="col">BOA Meeting Agenda</th>
                                <th class="text-center" scope="col">Date Of Issue</th>
                                <th class="text-center" scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-5">1</td>
                                <td>Agenda for 132nd Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">24-09-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/132nd_BOA_Agenda_updated.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">2</td>
                                <td>The Supplementary Agenda for 131st meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">22-08-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_for_the_131st_BoA_SEZ_to_be_held_on_28th_August_2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">3</td>
                                <td>Agenda for 131st Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">14-08-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda_for_the_131st_BoA_SEZ_to_be_held_in_3rd_Week_of_August_2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">4</td>
                                <td>The Supplementary Agenda for 130th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">14-07-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_for_the_130th_BoA_SEZ_to_be_held_in_week_of_July_2025.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">5</td>
                                <td>Agenda for 130th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">01-07-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/130th_BoA_Agenda.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">6</td>
                                <td>The Supplementary Agenda for 129th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">02-06-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/129th_Supplementary_Agenda.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">7</td>
                                <td>Agenda for 128th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">30-04-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/Final_Agenda_128th_BoA_SEZ.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">8</td>
                                <td>The Supplementary Agenda-II for 127th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">04-04-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/127_boa_ii.pdf.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">9</td>
                                <td>The supplementary agenda for 127th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">25-03-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_127th_BoA.pdf.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">10</td>
                                <td>Agenda for 127th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">24-02-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/127th_boa_agenda.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">11</td>
                                <td>The Supplementary Agenda-II for 126th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">20-01-2025</td>
                                <td class="w-15"><a href="repo/boa_agenda/supply_boa_agn_ii.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">12</td>
                                <td>The supplementary agenda for 126th meeting of the Board Of Approval for SEZs</td>
                                <td class="w-15">30-12-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/SUPLY_AGENDA_126TH_BOA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">13</td>
                                <td>Agenda for 126th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">26-12-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Revised_Agenda_for_the_126th_BoA_for_SEZs.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">14</td>
                                <td>Agenda for 125th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">22-11-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Final_Agenda_125th_BOA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">15</td>
                                <td>Agenda for 124th Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">25-10-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/124th_BOA_Agenda.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">16</td>
                                <td>The supplementary agenda for 123rd meeting of the Board Of Approval for SEZs to be held on 4th October, 2024</td>
                                <td class="w-15">26-09-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_of_123rd_BoA_for_SEZs.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">17</td>
                                <td>Agenda for 123rd Meeting of the Board of Approval for SEZs</td>
                                <td class="w-15">23-09-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda_of_123rd_BoA_for_SEZs.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">18</td>
                                <td>The supplementary agenda for 122nd meeting of the Board Of Approval for SEZ to be held on 30th August, 2024</td>
                                <td class="w-15">26-08-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_122_00012_BOA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">19</td>
                                <td>Agenda for 122nd Meeting of the Board of Approval held on 30th August, 2024</td>
                                <td class="w-15">16-08-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda_of_122nd000_BoA_for_SEZs.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">20</td>
                                <td>Table agenda for the 121st meeting of the BOA for SEZ is enclosed herewith</td>
                                <td class="w-15">30-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Tableagenda121.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">21</td>
                                <td>Table agenda for the 121st meeting of the BOA for SEZ is enclosed herewith</td>
                                <td class="w-15">22-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Tableagenda121.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">22</td>
                                <td>Table agenda for the 121st meeting of the BOA for SEZ is enclosed herewith</td>
                                <td class="w-15">22-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Tableagenda121.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">23</td>
                                <td>Table agenda for the 121st meeting of the BOA for SEZ is enclosed herewith</td>
                                <td class="w-15">22-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Tableagenda121.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">24</td>
                                <td>Table agenda for the 121st meeting of the BOA for SEZ is enclosed herewith</td>
                                <td class="w-15">22-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Tableagenda121.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">25</td>
                                <td>Supplimentary Agenda for 121st Meeting of the Board of Approval held on 26th July, 2024</td>
                                <td class="w-15">22-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_of_121st_BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">26</td>
                                <td>Agenda for 121st Meeting of the Board of Approval held on 26th July, 2024</td>
                                <td class="w-15">17-07-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda_of_121st_BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">27</td>
                                <td>Table Agenda for 120th Meeting of the Board of Approval for SEZs held on 18th June, 2024</td>
                                <td class="w-15">18-06-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Table_Agenda_120th_meeting_of_the_BoA_for_SEZs.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">28</td>
                                <td>Supplimentary Agenda III for 120th Meeting of the Board of Approval held on 18th June, 2024</td>
                                <td class="w-15">18-06-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Suppl_Agenda_III_for_120th_BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">29</td>
                                <td>Supplimentary Agenda II for 120th Meeting Board of Approval held on 10th June, 2024</td>
                                <td class="w-15">06-06-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_II_for_120th_BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">30</td>
                                <td>Supplimentary Agenda I for 120th Meeting of the Board of Approval held on 10th June, 2024</td>
                                <td class="w-15">02-06-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary_Agenda_I_for_120th_BOA_Meeting.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">31</td>
                                <td>Agenda for 120th Meeting of the Board of Approval scheduled held on 15th May, 2024</td>
                                <td class="w-15">30-04-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 120th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">32</td>
                                <td>Supplimentary Agenda II for the 119th meeting of the Board of Approval held on 1st Mar, 2024</td>
                                <td class="w-15">01-03-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 119th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">33</td>
                                <td>Supplimentary Agenda for the 119th meeting of the Board of Approval held on 29th Feb, 2024</td>
                                <td class="w-15">29-02-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 119th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">34</td>
                                <td>Agenda for the 119th meeting of the Board of Approval held on 26th Feb, 2024</td>
                                <td class="w-15">26-02-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 119th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">35</td>
                                <td>Supplimentary Agenda II for the 118th meeting of the Board of Approval held on 3rd Feb, 2024</td>
                                <td class="w-15">03-02-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 118th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">36</td>
                                <td>Supplimentary Agenda for the 118th meeting of the Board of Approval held on 24th Jan, 2024</td>
                                <td class="w-15">24-01-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 118th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">37</td>
                                <td>Agenda for the 118th meeting of the Board of Approval held on 17th Jan, 2024</td>
                                <td class="w-15">17-01-2024</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 118th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">38</td>
                                <td>Supplimentary Agenda II for the 117th meeting of the Board of Approval held on 15th Nov, 2023</td>
                                <td class="w-15">15-11-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 117th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">39</td>
                                <td>Supplimentary Agenda for the 117th meeting of the Board of Approval held on 14th Nov, 2023</td>
                                <td class="w-15">14-11-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 117th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">40</td>
                                <td>Agenda for the 117th meeting of the Board of Approval held on 6th Nov, 2023</td>
                                <td class="w-15">06-11-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 117th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">41</td>
                                <td>Supplimentary Agenda II for the 116th meeting of the Board of Approval held on 1st Sep, 2023</td>
                                <td class="w-15">01-09-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 116th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">42</td>
                                <td>Supplimentary Agenda for the 116th meeting of the Board of Approval held on 30th Aug, 2023</td>
                                <td class="w-15">30-08-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 116th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">43</td>
                                <td>Agenda for the 116th meeting of the Board of Approval held on 23rd Aug, 2023</td>
                                <td class="w-15">23-08-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 116th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">44</td>
                                <td>Supplimentary Agenda II for the 115th meeting of the Board of Approval held on 14th Jun, 2023</td>
                                <td class="w-15">14-06-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 115th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">45</td>
                                <td>Supplimentary Agenda for the 115th meeting of the Board of Approval held on 9th Jun, 2023</td>
                                <td class="w-15">09-06-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 115th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">46</td>
                                <td>Agenda for the 115th meeting of the Board of Approval held on 6th jun, 2023</td>
                                <td class="w-15">06-06-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 115th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">47</td>
                                <td>Supplimentary Agenda for the 114th meeting of the Board of Approval held on 6th Apr, 2023</td>
                                <td class="w-15">06-04-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 114th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">48</td>
                                <td>Agenda for the 114th meeting of the Board of Approval held on 31st Mar, 2023</td>
                                <td class="w-15">31-03-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 114th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">49</td>
                                <td>Supplimentary Agenda II for the 113th meeting of the Board of Approval held on 31st Jan, 2023</td>
                                <td class="w-15">31-01-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda II for 113th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">50</td>
                                <td>Supplimentary Agenda for the 113th meeting of the Board of Approval held on 12th Jan, 2023</td>
                                <td class="w-15">12-01-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Supplementary Agenda for 113th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
                            </tr>
                            <tr>
                                <td class="w-5">51</td>
                                <td>Agenda for the 113th meeting of the Board of Approval held on 7th Jan, 2023</td>
                                <td class="w-15">07-01-2023</td>
                                <td class="w-15"><a href="repo/boa_agenda/Agenda of the 113th Meeting of BoA.pdf" target="_blank" rel="noopener noreferrer"><i class="fa fa-download fa-2x"></i></a></td>
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