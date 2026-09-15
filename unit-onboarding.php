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
    <meta name="description" content="Falta Special Economic Zone - Unit Onboarding">

    <!-- Page Title -->
    <title><?php echo $gbl_row["org_name"]; ?> | Unit Onboarding</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Serif+Display&display=swap" rel="stylesheet">

    <!-- Onboarding-specific styles -->
    <style>
        /* ── Root variables ── */
        :root {
            --ob-navy:        #0F2D5E;
            --ob-navy-hover:  #1a4580;
            --ob-navy-bg:     #EEF2FA;
            --ob-border:      rgba(0,0,0,0.12);
            --ob-border-soft: rgba(0,0,0,0.07);
            --ob-text:        #1c1c1e;
            --ob-text-muted:  #6b7280;
            --ob-text-hint:   #9ca3af;
            --ob-bg:          #ffffff;
            --ob-bg-soft:     #f9fafb;
            --ob-radius:      8px;
            --ob-radius-lg:   14px;
        }

        /* ── Page layout ── */
        .form-v4 { padding: 48px 0 80px; }
        .form-v4 .page-content { padding: 0; }

        /* ── Outer card ── */
        .ob-card {
            font-family: 'DM Sans', sans-serif;
            max-width: 820px;
            margin: 0 auto;
            border-radius: var(--ob-radius-lg);
            box-shadow: 0 4px 40px rgba(0,0,0,0.10);
            overflow: hidden;
        }

        /* ── Hero header ── */
        .ob-hero {
            background: var(--ob-navy);
            padding: 28px 36px 24px;
            position: relative;
            overflow: hidden;
        }
        .ob-hero::before {
            content: '';
            position: absolute;
            right: -40px; top: -40px;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            pointer-events: none;
        }
        .ob-hero::after {
            content: '';
            position: absolute;
            right: 40px; bottom: -60px;
            width: 140px; height: 140px;
            border-radius: 50%;
            background: rgba(255,255,255,0.03);
            pointer-events: none;
        }
        .ob-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255,255,255,0.1);
            border: 0.5px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.75);
            margin-bottom: 10px;
        }
        .ob-hero h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 22px;
            font-weight: 400;
            color: #fff;
            letter-spacing: 0.3px;
            margin: 0 0 6px 0;
        }
        .ob-hero p {
            font-size: 12.5px;
            color: rgba(255,255,255,0.6);
            font-weight: 300;
            margin: 0;
        }

        /* ── Progress steps bar ── */
        .ob-steps {
            display: flex;
            align-items: center;
            background: var(--ob-bg-soft);
            border-bottom: 0.5px solid var(--ob-border-soft);
            padding: 14px 36px;
            gap: 0;
            overflow-x: auto;
        }
        .ob-step {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
        }
        .ob-step-num {
            width: 26px; height: 26px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 600;
            background: #fff;
            border: 1.5px solid var(--ob-border);
            color: var(--ob-text-muted);
        }
        .ob-step.active .ob-step-num {
            background: var(--ob-navy);
            border-color: var(--ob-navy);
            color: #fff;
        }
        .ob-step-label {
            font-size: 11.5px;
            font-weight: 500;
            color: var(--ob-text-muted);
        }
        .ob-step.active .ob-step-label { color: var(--ob-navy); }
        .ob-step-line {
            flex: 1;
            height: 1px;
            background: var(--ob-border-soft);
            margin: 0 10px;
            min-width: 20px;
        }

        /* ── Form body (scrollable) ── */
        .ob-body {
            background: var(--ob-bg);
            padding: 32px 36px 28px;
            max-height: 68vh;
            overflow-y: auto;
        }
        .ob-body::-webkit-scrollbar { width: 4px; }
        .ob-body::-webkit-scrollbar-track { background: transparent; }
        .ob-body::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.15); border-radius: 4px; }

        /* ── Section headers ── */
        .ob-section-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 28px 0 18px;
        }
        .ob-section-header:first-child { margin-top: 4px; }
        .ob-section-icon {
            width: 30px; height: 30px;
            border-radius: 8px;
            background: var(--ob-navy-bg);
            display: flex; align-items: center; justify-content: center;
            color: var(--ob-navy);
            font-size: 15px;
            flex-shrink: 0;
        }
        .ob-section-title {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            color: var(--ob-navy);
            white-space: nowrap;
        }
        .ob-section-line {
            flex: 1;
            height: 0.5px;
            background: var(--ob-border-soft);
        }

        /* ── Grid layouts ── */
        .ob-grid { display: grid; gap: 12px; margin-bottom: 12px; }
        .ob-grid-1 { grid-template-columns: 1fr; }
        .ob-grid-2 { grid-template-columns: 1fr 1fr; }
        .ob-grid-3 { grid-template-columns: 1fr 1fr 1fr; align-items: end; } /* align-items:end fixes label-wrap misalignment */

        /* ── Field wrapper ── */
        .ob-field { display: flex; flex-direction: column; gap: 5px; }

        /* ── Labels ── */
        .ob-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.3px;
            color: var(--ob-text-muted);
            text-transform: uppercase;
            display: block;
        }
        .ob-req { color: #c0392b; margin-left: 2px; }

        /* ── Inputs, selects, textareas ── */
        .ob-input,
        .ob-select,
        .ob-textarea {
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            height: 38px;
            padding: 0 12px;
            border: 0.5px solid var(--ob-border);
            border-radius: var(--ob-radius);
            color: var(--ob-text);
            background: var(--ob-bg);
            transition: border-color .15s, box-shadow .15s;
            outline: none;
            width: 100%;
            box-sizing: border-box;
        }
        .ob-input:focus,
        .ob-select:focus,
        .ob-textarea:focus {
            border-color: var(--ob-navy);
            box-shadow: 0 0 0 3px rgba(15,45,94,0.08);
        }
        .ob-input[readonly] {
            background: var(--ob-bg-soft);
            color: var(--ob-text-muted);
            cursor: not-allowed;
        }
        .ob-input::placeholder,
        .ob-textarea::placeholder { color: var(--ob-text-hint); font-size: 12.5px; }

        .ob-textarea {
            height: 72px;
            padding: 10px 12px;
            resize: vertical;
            line-height: 1.5;
        }

        .ob-select {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2'%3E%3Cpolyline points='6,9 12,15 18,9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 32px;
            cursor: pointer;
        }

        /* Remove number spinners */
        .ob-input[type="number"]::-webkit-inner-spin-button,
        .ob-input[type="number"]::-webkit-outer-spin-button { -webkit-appearance: none; }

        /* ── Prefix input group ── */
        .ob-input-prefix {
            display: flex;
            align-items: center;
            border: 0.5px solid var(--ob-border);
            border-radius: var(--ob-radius);
            overflow: hidden;
            transition: box-shadow .15s, border-color .15s;
        }
        .ob-input-prefix:focus-within {
            border-color: var(--ob-navy);
            box-shadow: 0 0 0 3px rgba(15,45,94,0.08);
        }
        .ob-prefix-tag {
            padding: 0 10px;
            font-size: 12px;
            font-weight: 500;
            color: var(--ob-text-muted);
            background: var(--ob-bg-soft);
            border-right: 0.5px solid var(--ob-border);
            height: 38px;
            display: flex;
            align-items: center;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .ob-prefix-tag-right {
            border-left: 0.5px solid var(--ob-border);
            border-right: none;
            border-radius: 0 var(--ob-radius) var(--ob-radius) 0;
        }
        .ob-input-prefix .ob-input {
            border: none;
            border-radius: 0;
            box-shadow: none !important;
        }

        /* ── Segmented radio group ── */
        .ob-radio-group {
            display: flex;
            align-items: center;
            height: 38px;
        }
        .ob-radio-opt input[type="radio"] { display: none; }
        .ob-radio-opt label {
            font-size: 12px;
            font-weight: 500;
            color: var(--ob-text-muted);
            padding: 6px 14px;
            border: 0.5px solid var(--ob-border);
            border-right: none;
            cursor: pointer;
            transition: all .15s;
            user-select: none;
            white-space: nowrap;
            line-height: 26px;
            display: block;
        }
        .ob-radio-opt:first-child label { border-radius: var(--ob-radius) 0 0 var(--ob-radius); }
        .ob-radio-opt:last-child label  { border-radius: 0 var(--ob-radius) var(--ob-radius) 0; border-right: 0.5px solid var(--ob-border); }
        .ob-radio-opt input[type="radio"]:checked + label {
            background: var(--ob-navy);
            border-color: var(--ob-navy);
            color: #fff;
        }

        /* ── Notice box ── */
        .ob-notice {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: var(--ob-navy-bg);
            border-radius: var(--ob-radius);
            padding: 12px 14px;
            margin-top: 24px;
        }
        .ob-notice i { color: var(--ob-navy); font-size: 16px; flex-shrink: 0; margin-top: 1px; }
        .ob-notice p { font-size: 12px; color: #1a3a6c; line-height: 1.5; margin: 0; }
        .ob-notice a { color: var(--ob-navy); font-weight: 600; text-decoration: underline; }

        /* ── Form footer (actions) ── */
        .ob-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 36px;
            background: var(--ob-bg-soft);
            border-top: 0.5px solid var(--ob-border-soft);
        }
        .ob-footer-left {
            font-size: 11.5px;
            color: var(--ob-text-hint);
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .ob-footer-right { display: flex; gap: 10px; }

        .ob-btn {
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 500;
            padding: 9px 22px;
            border-radius: var(--ob-radius);
            cursor: pointer;
            border: 0.5px solid var(--ob-border);
            background: transparent;
            color: var(--ob-text);
            transition: background .15s;
            display: inline-block;
        }
        .ob-btn:hover { background: #f0f0f0; }

        .ob-btn-primary {
            background: var(--ob-navy);
            border-color: var(--ob-navy);
            color: #fff;
        }
        .ob-btn-primary:hover { background: var(--ob-navy-hover); border-color: var(--ob-navy-hover); color: #fff; }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            .ob-hero, .ob-body, .ob-footer { padding-left: 20px; padding-right: 20px; }
            .ob-steps { padding-left: 20px; padding-right: 20px; }
            .ob-grid-2, .ob-grid-3 { grid-template-columns: 1fr; }
            .ob-step-label { display: none; }
        }
    </style>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper event-single-page">

        <!-- Start header -->
        <?php include("includes/header.php"); ?>
        <!-- end of header -->

        <section class="form-v4">
            <div class="container">
                <div class="page-content">

                    <div class="ob-card">

                        <!-- ── Hero Header ── -->
                        <div class="ob-hero">
                            <div class="ob-hero-badge">
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                Falta SEZ &mdash; Unit Onboarding
                            </div>
                            <h1>Unit Onboarding Form</h1>
                            <p>Complete all fields below and submit for FSEZ Admin review. Fields marked * are required.</p>
                        </div>

                        <!-- ── Progress Steps ── -->
                        <div class="ob-steps">
                            <div class="ob-step active">
                                <div class="ob-step-num">1</div>
                                <div class="ob-step-label">Director's Profile</div>
                            </div>
                            <div class="ob-step-line"></div>
                            <div class="ob-step">
                                <div class="ob-step-num">2</div>
                                <div class="ob-step-label">Business Profile</div>
                            </div>
                            <div class="ob-step-line"></div>
                            <div class="ob-step">
                                <div class="ob-step-num">3</div>
                                <div class="ob-step-label">Unit's Profile</div>
                            </div>
                            <div class="ob-step-line"></div>
                            <div class="ob-step">
                                <div class="ob-step-num">4</div>
                                <div class="ob-step-label">Compliance</div>
                            </div>
                        </div>

                        <!-- ── Main Onboarding Form ── -->
                        <form class="ob-body" action="#" method="post" id="onboardingForm">

                            <!-- SECTION: Director's Profile -->
                            <div class="ob-section-header">
                                <div class="ob-section-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
                                <span class="ob-section-title">Director's Profile</span>
                                <div class="ob-section-line"></div>
                            </div>

                            <div class="ob-grid ob-grid-1">
                                <div class="ob-field">
                                    <label class="ob-label" for="unit_name">Name of the Unit</label>
                                    <input type="text" name="unit_name" id="unit_name" class="ob-input text_upper" readonly placeholder="Auto-filled after LOA verification">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-1">
                                <div class="ob-field">
                                    <label class="ob-label" for="director_name">Name of the Director(s) / Partner(s) / Proprietor <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <input type="text" name="director_name" id="director_name" class="ob-input" aria-required="true" placeholder="Enter full name(s), separated by comma if multiple">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-1">
                                <div class="ob-field">
                                    <label class="ob-label" for="director_address">Residential Address <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <textarea name="director_address" id="director_address" class="ob-textarea" aria-required="true" placeholder="Enter residential address of the Director(s) / Partner(s) / Proprietor"></textarea>
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="director_phone">Telephone No. <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91</span>
                                        <input type="tel" name="director_phone" id="director_phone" class="ob-input" maxlength="10" aria-required="true" placeholder="XXXXX XXXXX">
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="director_email">E-mail ID <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                        <input type="email" name="director_email" id="director_email" class="ob-input" aria-required="true" placeholder="director@example.com">
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION: Business Profile -->
                            <div class="ob-section-header">
                                <div class="ob-section-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                <span class="ob-section-title">Business Profile</span>
                                <div class="ob-section-line"></div>
                            </div>

                            <div class="ob-grid ob-grid-3">
                                <div class="ob-field">
                                    <label class="ob-label" for="iec_no">IEC No.</label>
                                    <input type="text" name="iec_no" id="iec_no" class="ob-input text_upper" maxlength="10" placeholder="IEC Number">
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="gst_no">GST No.</label>
                                    <input type="text" name="gst_no" id="gst_no" class="ob-input text_upper" maxlength="15" placeholder="15-digit GSTIN">
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="pan_no">PAN No. <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <input type="text" name="pan_no" id="pan_no" class="ob-input text_upper" maxlength="10" aria-required="true" placeholder="AAAAAXXXX0">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="udyam_no">Udyam No.</label>
                                    <input type="text" name="udyam_no" id="udyam_no" class="ob-input text_upper" placeholder="UDYAM-XX-00-0000000">
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="udyam_validity">Udyam Validity Date</label>
                                    <input type="date" name="udyam_validity" id="udyam_validity" class="ob-input">
                                </div>
                            </div>

                            <!-- SECTION: Unit's Profile -->
                            <div class="ob-section-header">
                                <div class="ob-section-icon"><i class="fa fa-industry" aria-hidden="true"></i></div>
                                <span class="ob-section-title">Unit's Profile</span>
                                <div class="ob-section-line"></div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="loa_no">LOA No.</label>
                                    <input type="text" name="loa_no" id="loa_no" class="ob-input text_upper" readonly placeholder="Auto-filled after LOA verification">
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="loa_date">LOA Date <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <input type="date" name="loa_date" id="loa_date" class="ob-input" aria-required="true">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-1">
                                <div class="ob-field">
                                    <label class="ob-label" for="registered_office_address">Registered Office Address <span class="ob-req" aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                                    <textarea name="registered_office_address" id="registered_office_address" class="ob-textarea" aria-required="true" placeholder="Enter registered office address of the unit"></textarea>
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-1">
                                <div class="ob-field">
                                    <label class="ob-label" for="items_manufactured">Items of Manufacture Approved</label>
                                    <textarea name="items_manufactured" id="items_manufactured" class="ob-textarea" placeholder="List items approved for manufacture"></textarea>
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="approved_capacity">Approved Capacity</label>
                                    <input type="text" name="approved_capacity" id="approved_capacity" class="ob-input" placeholder="e.g. 5,000 units / year">
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="dcp_date">Date of Commencement of Production (DCP)</label>
                                    <input type="date" name="dcp_date" id="dcp_date" class="ob-input">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="space_land_allotted">Space / Land Allotted</label>
                                    <div class="ob-input-prefix">
                                        <input type="text" name="space_land_allotted" id="space_land_allotted" class="ob-input" placeholder="Area">
                                        <span class="ob-prefix-tag ob-prefix-tag-right">sq. mtr.</span>
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label">Lease Deed Valid?</label>
                                    <div class="ob-radio-group">
                                        <div class="ob-radio-opt"><input type="radio" name="lease_deed_valid" id="ld_yes" value="Yes"><label for="ld_yes">Yes</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="lease_deed_valid" id="ld_no"  value="No" ><label for="ld_no" >No</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="lease_deed_valid" id="ld_na"  value="NA" ><label for="ld_na" >N/A</label></div>
                                    </div>
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label">BLUT Executed?</label>
                                    <div class="ob-radio-group">
                                        <div class="ob-radio-opt"><input type="radio" name="blut_executed" id="bl_yes" value="Yes"><label for="bl_yes">Yes</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="blut_executed" id="bl_no"  value="No" ><label for="bl_no" >No</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="blut_executed" id="bl_na"  value="NA" ><label for="bl_na" >N/A</label></div>
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label">APR Submitted?</label>
                                    <div class="ob-radio-group">
                                        <div class="ob-radio-opt"><input type="radio" name="apr_submitted" id="apr_yes" value="Yes"><label for="apr_yes">Yes</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="apr_submitted" id="apr_no"  value="No" ><label for="apr_no" >No</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="apr_submitted" id="apr_na"  value="NA" ><label for="apr_na" >N/A</label></div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3-col financial row: align-items:end on .ob-grid-3 prevents label-wrap misalignment -->
                            <div class="ob-grid ob-grid-3">
                                <div class="ob-field">
                                    <label class="ob-label" for="fob_value_exports">FoB Value of Exports</label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag">&#8377; Lakh</span>
                                        <input type="number" step="0.01" name="fob_value_exports" id="fob_value_exports" class="ob-input" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="nfe_earnings">Net Foreign Exchange Earnings</label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag">&#8377; Lakh</span>
                                        <input type="number" step="0.01" name="nfe_earnings" id="nfe_earnings" class="ob-input" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="dta_sales">DTA Sales During Year</label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag">&#8377; Lakh</span>
                                        <input type="number" step="0.01" name="dta_sales" id="dta_sales" class="ob-input" placeholder="0.00">
                                    </div>
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="fc_account_no">Foreign Currency A/c No.</label>
                                    <div class="ob-input-prefix">
                                        <span class="ob-prefix-tag"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                        <input type="text" name="fc_account_no" id="fc_account_no" class="ob-input" placeholder="Account Number">
                                    </div>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label">LOA Renewal Requested (before 2 months)?</label>
                                    <div class="ob-radio-group">
                                        <div class="ob-radio-opt"><input type="radio" name="loa_renewal_requested" id="lr_yes" value="Yes"><label for="lr_yes">Yes</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="loa_renewal_requested" id="lr_no"  value="No" ><label for="lr_no" >No</label></div>
                                        <div class="ob-radio-opt"><input type="radio" name="loa_renewal_requested" id="lr_na"  value="NA" ><label for="lr_na" >N/A</label></div>
                                    </div>
                                </div>
                            </div>

                            <!-- SECTION: Compliance & Licenses -->
                            <div class="ob-section-header">
                                <div class="ob-section-icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
                                <span class="ob-section-title">Compliance &amp; Licenses</span>
                                <div class="ob-section-line"></div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="fire_license_status">Fire License Status</label>
                                    <select name="fire_license_status" id="fire_license_status" class="ob-select">
                                        <option value="">&#8212; Select status &#8212;</option>
                                        <option value="Valid">Valid</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Applied">Applied / Pending</option>
                                        <option value="NA">Not Applicable</option>
                                    </select>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="fire_license_expiry">Fire License Expiry Date</label>
                                    <input type="date" name="fire_license_expiry" id="fire_license_expiry" class="ob-input">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="pollution_clearance_status">Pollution Control Clearance Status</label>
                                    <select name="pollution_clearance_status" id="pollution_clearance_status" class="ob-select">
                                        <option value="">&#8212; Select status &#8212;</option>
                                        <option value="Valid">Valid</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Applied">Applied / Pending</option>
                                        <option value="NA">Not Applicable</option>
                                    </select>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="pollution_clearance_expiry">Pollution Clearance Expiry Date</label>
                                    <input type="date" name="pollution_clearance_expiry" id="pollution_clearance_expiry" class="ob-input">
                                </div>
                            </div>

                            <div class="ob-grid ob-grid-2">
                                <div class="ob-field">
                                    <label class="ob-label" for="factory_license_status">Factory License Status</label>
                                    <select name="factory_license_status" id="factory_license_status" class="ob-select">
                                        <option value="">&#8212; Select status &#8212;</option>
                                        <option value="Valid">Valid</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Applied">Applied / Pending</option>
                                        <option value="NA">Not Applicable</option>
                                    </select>
                                </div>
                                <div class="ob-field">
                                    <label class="ob-label" for="factory_license_expiry">Factory License Expiry Date</label>
                                    <input type="date" name="factory_license_expiry" id="factory_license_expiry" class="ob-input">
                                </div>
                            </div>

                            <!-- Hidden field -->
                            <input type="hidden" id="loa_status_hidden" name="loa_status_hidden">

                            <!-- Notice -->
                            <div class="ob-notice">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <p>For more information, kindly refer to the <a href="circulars-and-policies.php">Circular</a> published by Falta SEZ. Submission of this form initiates a review by the FSEZ Admin team.</p>
                            </div>

                        </form><!-- /.ob-body -->

                        <!-- ── Footer Actions ── -->
                        <div class="ob-footer">
                            <span class="ob-footer-left">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                Secure submission to FSEZ Admin
                            </span>
                            <div class="ob-footer-right">
                                <button type="button" class="ob-btn" id="saveDraftBtn">Save Draft</button>
                                <button type="submit" form="onboardingForm" name="onboard" class="ob-btn ob-btn-primary">Submit Onboarding Data &rarr;</button>
                            </div>
                        </div>

                    </div><!-- /.ob-card -->

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

    <!-- Error Modal: Invalid LOA Number -->
    <div class="loa_error modal" id="invalidLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="">
        <span class="title text-center">Invalid LOA Number!</span>
        <p class="text-center">The LOA Number you entered is not recognized. Please retry or contact Falta SEZ support.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Error Modal: Duplicate submission -->
    <div class="loa_error modal" id="duplicateLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="">
        <span class="title text-center">Duplicate Onboarding Request!</span>
        <p class="text-center">This Unit has already been onboarded with Falta SEZ.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Error Modal: Submission error -->
    <div class="loa_error modal" id="errorLoa" role="alert">
        <img src="./images/warning.png" width="50px" height="auto" alt="">
        <span class="title text-center">Something went wrong!</span>
        <p class="text-center">Something is not correct, please try again after sometime.</p>
        <div class="button" data-dismiss="modal">Close</div>
    </div>

    <!-- Success Modal -->
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
                    <p>Unit onboarding data has been submitted successfully to FSEZ Admin for review.</p>
                    <button class="btn btn-success" data-dismiss="modal"><span>Close &amp; Return</span></button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/validator.js"></script>

    <script>
        jQuery(document).ready(function ($) {

            /* ── LOA lookup ── */
            $("#loaForm").on("submit", function (e) {
                e.preventDefault();
                var loa_number = $("#loa_number").val();
                var counter = 0;
                $.ajax({
                    url: 'js/unit-list.json',
                    type: "GET",
                    dataType: 'JSON',
                    success: function (data) {
                        for (var i = 0; i < data.length; i++) {
                            var n = data[i];
                            if (n.loa_number.toLowerCase() === loa_number.toLowerCase()) {
                                $('#unit_name').val(n.unit_name);
                                $('#loa_no').val(n.loa_number);
                                $('#registered_office_address').val(n.unit_address || '');
                                $('#director_email').val(n.unit_email || '');
                                $('#loa_status_hidden').val(n.unit_status);
                                break;
                            } else {
                                counter++;
                                if (counter === data.length) {
                                    $("#invalidLoa").modal('show');
                                    $("#loaForm").trigger('reset');
                                }
                            }
                        }
                        $("#loaForm").trigger('reset');
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
                return false;
            });

            /* ── Onboarding form submission ── */
            $("#onboardingForm").on("submit", function (e) {
                e.preventDefault();

                var formData = new FormData($("#onboardingForm")[0]);

                // Collect radio values explicitly
                formData.set('lease_deed_valid',      $('input[name="lease_deed_valid"]:checked').val()      || '');
                formData.set('blut_executed',         $('input[name="blut_executed"]:checked').val()         || '');
                formData.set('apr_submitted',         $('input[name="apr_submitted"]:checked').val()         || '');
                formData.set('loa_renewal_requested', $('input[name="loa_renewal_requested"]:checked').val() || '');

                var isValid = checkFormStatus("onboardingForm");

                if (isValid) {
                    $.ajax({
                        type: "POST",
                        url: "includes/onboard-unit.php",
                        data: formData,
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (res) {
                            console.log(res);
                            if (res.includes('0')) {
                                $("#successModal").modal('show');
                                $("#onboardingForm").trigger('reset');
                            } else if (res == 2) {
                                $("#duplicateLoa").modal('show');
                                $("#onboardingForm").trigger('reset');
                            } else {
                                $("#errorLoa").modal('show');
                                console.log('Something went wrong.');
                            }
                        },
                        error: function (e) {
                            $("#errorLoa").modal('show');
                            $("#onboardingForm").trigger('reset');
                        }
                    });
                }
            });

            /* ── Save Draft (placeholder) ── */
            $("#saveDraftBtn").on("click", function () {
                // Implement draft-saving logic here if required
                alert("Draft saved successfully.");
            });

        });
    </script>

</body>

</html>