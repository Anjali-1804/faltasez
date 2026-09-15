<?php
include("application-top.php");

function fsez_rows($con, $sql) {
    $out = array();
    $res = mysqli_query($con, $sql);
    if ($res) {
        while ($row = mysqli_fetch_array($res)) {
            $out[] = $row;
        }
    }
    return $out;
}

$news_items = fsez_rows($con, "select * from fsez_news where status = 1 order by added_on desc limit 20");
$circular_items = fsez_rows($con, "select * from fsez_circulars where status = 1 order by added_on desc limit 8");
$tender_items = fsez_rows($con, "select * from fsez_tenders where status = 1 order by added_on desc limit 8");
$vacancy_items = fsez_rows($con, "select * from fsez_vacancies where status = 1 order by added_on desc limit 8");

function fsez_news_link($nrow) {
    $href = "circulars-and-policies.php";
    $extra = "";
    if (!empty($nrow["news_file_name"]) && $nrow["news_file_name"] !== "noimage.gif") {
        $href = fsez_upload_href("admin/upload_news_documents", $nrow["news_file_name"]);
        $extra = ' target="_blank" rel="noopener noreferrer" title="Opens in a new window"';
    } else if (!empty($nrow["news_link"])) {
        $href = $nrow["news_link"];
        $extra = ' target="_blank" rel="noopener noreferrer" title="Opens in a new window"';
    }
    return array($href, $extra);
}

function fsez_list_items($items, $titleKey, $fileKey, $folder, $fallback) {
    $shown = 0;
    foreach ($items as $row) {
        if ($shown >= 8) break;
        $href = $fallback;
        $extra = "";
        if (!empty($row[$fileKey]) && $row[$fileKey] !== "noimage.gif") {
            $href = fsez_upload_href(rtrim($folder, "/"), $row[$fileKey]);
            $extra = ' target="_blank" rel="noopener noreferrer" title="Opens in a new window"';
        }
        $dateRaw = !empty($row["date_of_issue"]) ? $row["date_of_issue"] : (!empty($row["added_on"]) ? $row["added_on"] : "");
        $date = $dateRaw ? (strtotime($dateRaw) ? date("d M Y", strtotime($dateRaw)) : $dateRaw) : "";
        echo "<li><a href=\"" . htmlspecialchars($href) . "\"" . $extra . ">" . htmlspecialchars($row[$titleKey]) . "</a>";
        if ($date) echo "<time>" . htmlspecialchars($date) . "</time>";
        echo "</li>";
        $shown++;
    }
    if ($shown === 0) {
        echo "<li>No updates available at present.</li>";
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
    <title><?php echo $gbl_row["org_name"]; ?></title>

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
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper gov-home">
        <div class="preloader" hidden></div>

        <!-- Start header -->
        <?php include("includes/header.php"); ?>
        <!-- end of header -->

        <!-- start of hero -->
        <div class="gov-banner">
        <section class="hero hero-style-three hero-slider-wrapper">
            <div class="hero-slider">
                <div class="slide">
                   <img src="images/slider/slider-98.jpg" alt="Falta Special Economic Zone">
                   <div class="slider-title">
                      <span>Welcome to</span>
                      <h1>Falta Special Economic Zone</h1>
                      <p>Office of the Development Commissioner, West Bengal</p>
                   </div>
                </div>
                <div class="slide">
                   <img src="images/slider/slider-99.jpg" alt="Falta Special Economic Zone campus">
                   <div class="slider-title">
                      <span>Campus view</span>
                      <h2>Falta SEZ</h2>
                      <p>A dedicated export manufacturing zone near Kolkata</p>
                   </div>
                </div>
                <div class="slide">
                   <img src="images/slider/slider-12.jpg" alt="Official event at Falta SEZ">
                   <div class="slider-title">
                      <span>Office of the Development Commissioner</span>
                      <h2>Serving units and developers</h2>
                      <p>Approvals, facilitation and estate services</p>
                   </div>
                </div>
                <div class="slide">
                    <img src="images/slider/slider-1.jpg" alt="Falta SEZ administrative building">
                    <div class="slider-title">
                      <span>Infrastructure</span>
                      <h2>Ready industrial campus</h2>
                      <p>Connected to Kolkata and Haldia ports</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="images/slider/slider-101.png" alt="Falta SEZ event">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-102.jpg" alt="Falta SEZ event photograph">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-104.jpg" alt="Falta SEZ photograph">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-3.jpg" alt="Falta Special Economic Zone">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-4.jpg" alt="Falta SEZ infrastructure">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-5.jpg" alt="Falta SEZ view">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-7.jpg" alt="Falta SEZ campus view">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-6.jpg" alt="Falta SEZ facility">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-10.jpg" alt="Falta SEZ premises">
                </div>
                <div class="slide">
                    <img src="images/slider/slider-11.jpg" alt="Falta SEZ building">
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <section class="fsez-services" aria-label="Important services">
            <div class="container">
                <div class="fsez-services-grid">
                    <a class="fsez-service-card" href="uac-meeting-agenda.php">
                        <span class="ico" aria-hidden="true"><i class="fa fa-users"></i></span>
                        <span>UAC Meeting Agenda</span>
                        <small>Approval Committee agenda for SEZ units</small>
                    </a>
                    <a class="fsez-service-card" href="https://fsez.gov.in/uap/" target="_blank" rel="noopener noreferrer" title="Opens in a new window">
                        <span class="ico" aria-hidden="true"><i class="fa fa-credit-card"></i></span>
                        <span>Gatepass Portal</span>
                        <small>Online gate-pass application for the zone</small>
                    </a>
                    <a class="fsez-service-card" href="unit-rent-receipt.php">
                        <span class="ico" aria-hidden="true"><i class="fa fa-inr"></i></span>
                        <span>Pay Your Rent</span>
                        <small>Unit rent status and payment details</small>
                    </a>
                    <a class="fsez-service-card" href="unit-registration.php">
                        <span class="ico" aria-hidden="true"><i class="fa fa-building"></i></span>
                        <span>Unit Sign Up</span>
                        <small>Register a unit with Falta SEZ</small>
                    </a>
                    <a class="fsez-service-card" href="https://www.sezonline-ndml.com/" target="_blank" rel="noopener noreferrer" title="Opens in a new window">
                        <span class="ico" aria-hidden="true"><i class="fa fa-globe"></i></span>
                        <span>SEZ Online</span>
                        <small>Developer and unit monitoring system</small>
                    </a>
                    <a class="fsez-service-card" href="circulars-and-policies.php">
                        <span class="ico" aria-hidden="true"><i class="fa fa-file-text"></i></span>
                        <span>Circulars</span>
                        <small>Departmental circulars and policies</small>
                    </a>
                </div>
            </div>
        </section>
        </div>

        <section class="gigw-ticker" aria-label="Departmental updates">
            <div class="container">
                <div class="gigw-ticker-inner">
                    <div class="gigw-ticker-label">Departmental Updates</div>
                    <div class="gigw-ticker-track">
                        <ul class="gigw-ticker-list">
                            <?php
                            $render_news = function ($items) {
                                foreach ($items as $nrow) {
                                    list($href, $extra) = fsez_news_link($nrow);
                                    echo '<li><a href="' . htmlspecialchars($href) . '"' . $extra . '>' . $nrow["news_description"] . '</a></li>';
                                }
                            };
                            $render_news($news_items);
                            $render_news($news_items);
                            ?>
                        </ul>
                    </div>
                    <button type="button" class="gigw-ticker-pause" data-gigw-ticker aria-pressed="false">Pause updates</button>
                </div>
            </div>
        </section>

        <section class="fsez-section" aria-label="Divisions and services">
            <div class="container">
                <div class="fsez-section-head">
                    <h2>Divisions</h2>
                </div>
                <div data-fsez-tabs>
                    <div class="fsez-tabs" role="tablist" aria-label="Homepage link groups">
                        <button type="button" class="fsez-tab" role="tab" id="tab-div" aria-selected="true" aria-controls="panel-div">Divisions</button>
                        <button type="button" class="fsez-tab" role="tab" id="tab-svc" aria-selected="false" aria-controls="panel-svc">Services</button>
                        <button type="button" class="fsez-tab" role="tab" id="tab-oth" aria-selected="false" aria-controls="panel-oth">Other links</button>
                    </div>
                    <div class="fsez-div-grid" id="panel-div" role="tabpanel" aria-labelledby="tab-div">
                        <a class="fsez-div-card" href="fsez-at-a-glance.php"><i class="fa fa-info" aria-hidden="true"></i><span>About FSEZ</span></a>
                        <a class="fsez-div-card" href="organisation-structure.php"><i class="fa fa-sitemap" aria-hidden="true"></i><span>Organisation</span></a>
                        <a class="fsez-div-card" href="falta-sez-authority.php"><i class="fa fa-university" aria-hidden="true"></i><span>Authority</span></a>
                        <a class="fsez-div-card" href="uac-meeting-agenda.php"><i class="fa fa-gavel" aria-hidden="true"></i><span>UAC</span></a>
                        <a class="fsez-div-card" href="jurisdiction.php"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Jurisdiction</span></a>
                        <a class="fsez-div-card" href="right-to-information.php"><i class="fa fa-book" aria-hidden="true"></i><span>RTI</span></a>
                    </div>
                    <div class="fsez-div-grid" id="panel-svc" role="tabpanel" aria-labelledby="tab-svc" hidden>
                        <a class="fsez-div-card" href="https://fsez.gov.in/uap/" target="_blank" rel="noopener noreferrer" title="Opens in a new window"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Gatepass</span></a>
                        <a class="fsez-div-card" href="unit-rent-receipt.php"><i class="fa fa-inr" aria-hidden="true"></i><span>Unit Rent</span></a>
                        <a class="fsez-div-card" href="unit-registration.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Unit Sign Up</span></a>
                        <a class="fsez-div-card" href="identity-card.php"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Identity Card</span></a>
                        <a class="fsez-div-card" href="sez-forms.php"><i class="fa fa-list-alt" aria-hidden="true"></i><span>SEZ Forms</span></a>
                        <a class="fsez-div-card" href="https://www.sezonline-ndml.com/" target="_blank" rel="noopener noreferrer" title="Opens in a new window"><i class="fa fa-lock" aria-hidden="true"></i><span>SEZ Online</span></a>
                    </div>
                    <div class="fsez-div-grid" id="panel-oth" role="tabpanel" aria-labelledby="tab-oth" hidden>
                        <a class="fsez-div-card" href="tenders.php"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Tenders</span></a>
                        <a class="fsez-div-card" href="vacancy.php"><i class="fa fa-briefcase" aria-hidden="true"></i><span>Vacancies</span></a>
                        <a class="fsez-div-card" href="circulars-and-policies.php"><i class="fa fa-bullhorn" aria-hidden="true"></i><span>Circulars</span></a>
                        <a class="fsez-div-card" href="vigilance.php"><i class="fa fa-shield" aria-hidden="true"></i><span>Vigilance</span></a>
                        <a class="fsez-div-card" href="public-grievance.php"><i class="fa fa-comments" aria-hidden="true"></i><span>CPGRAMS</span></a>
                        <a class="fsez-div-card" href="public-notice.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Public Notice</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="fsez-section" aria-label="About Falta SEZ">
            <div class="container">
                <div class="fsez-about-grid">
                    <article class="fsez-about-card">
                        <h2>About Falta SEZ</h2>
                        <p>Falta Special Economic Zone was set up by the Government of India in 1984 and now functions under the SEZ Act and Rules from 10 February 2006.</p>
                        <a class="fsez-panel-more" href="about-fsez.php">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>How to setup a unit</h2>
                        <p>Guidance for setting up a unit in Falta SEZ, including approvals, documentation and the letter of approval process.</p>
                        <a class="fsez-panel-more" href="procedure-to-set-up-a-unit.php">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>FSEZ Authority</h2>
                        <p>The Authority develops and maintains estate infrastructure and world-class facilities for units operating in the zone.</p>
                        <a class="fsez-panel-more" href="falta-sez-authority.php">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>Export Oriented Units</h2>
                        <p>The EOU scheme supports export manufacturing and services under the jurisdiction of the Development Commissioner.</p>
                        <a class="fsez-panel-more" href="eou-meeting-agenda.php">Read more</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="fsez-section" aria-label="Latest notices">
            <div class="container">
                <div class="fsez-section-head">
                    <h2>Latest updates</h2>
                </div>
                <div data-fsez-tabs>
                    <div class="fsez-tabs" role="tablist" aria-label="Notice categories">
                        <button type="button" class="fsez-tab" role="tab" id="tab-news" aria-selected="true" aria-controls="panel-news">Latest updates</button>
                        <button type="button" class="fsez-tab" role="tab" id="tab-circ" aria-selected="false" aria-controls="panel-circ">Public notices</button>
                        <button type="button" class="fsez-tab" role="tab" id="tab-tend" aria-selected="false" aria-controls="panel-tend">Tenders</button>
                        <button type="button" class="fsez-tab" role="tab" id="tab-vac" aria-selected="false" aria-controls="panel-vac">Vacancies</button>
                    </div>
                    <div class="fsez-notice-panel" id="panel-news" role="tabpanel" aria-labelledby="tab-news">
                        <ul class="fsez-updates">
                            <?php
                            $shown = 0;
                            foreach ($news_items as $nrow) {
                                if ($shown >= 8) break;
                                list($href, $extra) = fsez_news_link($nrow);
                                $date = !empty($nrow["added_on"]) ? date("d M Y", strtotime($nrow["added_on"])) : "";
                                echo "<li><a href=\"" . htmlspecialchars($href) . "\"" . $extra . ">" . $nrow["news_description"] . "</a>";
                                if ($date) echo "<time datetime=\"" . htmlspecialchars($nrow["added_on"]) . "\">" . htmlspecialchars($date) . "</time>";
                                echo "</li>";
                                $shown++;
                            }
                            if ($shown === 0) echo "<li>No updates available at present.</li>";
                            ?>
                        </ul>
                        <a class="fsez-panel-more" href="circulars-and-policies.php">View all</a>
                    </div>
                    <div class="fsez-notice-panel" id="panel-circ" role="tabpanel" aria-labelledby="tab-circ" hidden>
                        <ul class="fsez-updates">
                            <?php fsez_list_items($circular_items, "circular_name", "circular_file_name", "admin/upload_circular_documents/", "circulars-and-policies.php"); ?>
                        </ul>
                        <a class="fsez-panel-more" href="circulars-and-policies.php">View all</a>
                    </div>
                    <div class="fsez-notice-panel" id="panel-tend" role="tabpanel" aria-labelledby="tab-tend" hidden>
                        <ul class="fsez-updates">
                            <?php fsez_list_items($tender_items, "tender_name", "tender_file_name", "admin/upload_tender_documents/", "tenders.php"); ?>
                        </ul>
                        <a class="fsez-panel-more" href="tenders.php">View all</a>
                    </div>
                    <div class="fsez-notice-panel" id="panel-vac" role="tabpanel" aria-labelledby="tab-vac" hidden>
                        <ul class="fsez-updates">
                            <?php fsez_list_items($vacancy_items, "vacancy_name", "vacancy_file_name", "admin/upload_vacancy_documents/", "vacancy.php"); ?>
                        </ul>
                        <a class="fsez-panel-more" href="vacancy.php">View all</a>
                    </div>
                </div>
            </div>
        </section>

        <?php
            $glsql = "select * from fsez_gallery_images where status = 1 order by added_on DESC limit 8";
            $glres = mysqli_query($con, $glsql);
        ?>
        <section class="fsez-stats" aria-label="FSEZ statistics">
            <div class="container">
                <h2>FSEZ Statistics</h2>
                <div class="fsez-stat-grid">
                    <div class="fsez-stat"><strong>12</strong><span>State Presence</span></div>
                    <div class="fsez-stat"><strong>16</strong><span>Number of SEZ</span></div>
                    <div class="fsez-stat"><strong>48142</strong><span>Export (Cr)</span></div>
                    <div class="fsez-stat"><strong>101847</strong><span>Employment</span></div>
                </div>
            </div>
        </section>

        <section class="fsez-section" aria-label="Photo and video gallery">
            <div class="container">
                <div class="fsez-gallery-grid">
                    <div class="fsez-panel">
                        <h2>Photo Gallery</h2>
                        <div class="fsez-panel-body">
                            <div class="fsez-photo-grid">
                                <?php
                                $gcount = 0;
                                if ($glres) {
                                    while ($glrow = mysqli_fetch_array($glres)) {
                                        $src = fsez_upload_href("admin/upload_gallery_images", $glrow["gallery_image"]);
                                        if ($src === "") {
                                            continue;
                                        }
                                        $gcount++;
                                        $alt = fsez_gallery_image_alt(isset($glrow["category_id"]) ? $glrow["category_id"] : 0);
                                        echo '<a href="photo-gallery-mod.php"><img src="' . htmlspecialchars($src) . '" alt="' . htmlspecialchars($alt) . '" width="220" height="110"></a>';
                                    }
                                }
                                if ($gcount === 0) {
                                    echo '<p>No gallery images available.</p>';
                                }
                                ?>
                            </div>
                            <a class="fsez-panel-more" href="photo-gallery-mod.php">View gallery</a>
                        </div>
                    </div>
                    <div class="fsez-panel">
                        <h2>Video Gallery</h2>
                        <div class="fsez-panel-body">
                            <div class="fsez-video-grid">
                                <?php
                                $vcount = 0;
                                foreach (fsez_video_items() as $video) {
                                    $src = fsez_upload_href("videos", $video["file"]);
                                    if ($src === "") {
                                        continue;
                                    }
                                    $vcount++;
                                    echo '<a class="fsez-video-card" href="video-galley.php">';
                                    echo '<span class="fsez-video-thumb">';
                                    echo '<video muted preload="metadata" playsinline aria-hidden="true"><source src="' . htmlspecialchars($src) . '" type="video/mp4"></video>';
                                    echo '<span class="fsez-video-play" aria-hidden="true"></span>';
                                    echo '</span>';
                                    echo '<span class="fsez-video-name">' . htmlspecialchars($video["title"]) . '</span>';
                                    echo '<time datetime="' . htmlspecialchars($video["datetime"]) . '">' . htmlspecialchars($video["date"]) . '</time>';
                                    echo '</a>';
                                }
                                if ($vcount === 0) {
                                    echo '<p>No gallery videos available.</p>';
                                }
                                ?>
                            </div>
                            <a class="fsez-panel-more" href="video-galley.php">View gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fsez-section fsez-important" aria-label="Important links">
            <div class="container">
                <div class="fsez-section-head">
                    <h2>Important links</h2>
                </div>
                <div class="fsez-important-grid">
                    <article class="fsez-about-card">
                        <h2>SEZ Rules &amp; Acts</h2>
                        <p>Notified instructions on the SEZ Act and Rules from the Ministry of Commerce and Industry.</p>
                        <a class="fsez-panel-more" href="sez-rules-and-acts.php">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>List of Units</h2>
                        <p>Units and companies currently operating under Falta Special Economic Zone.</p>
                        <a class="fsez-panel-more" href="repo/List_of_units_with_valid_LOA_at_Falta_SEZ.pdf" target="_blank" rel="noopener noreferrer" title="PDF document, opens in a new window">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>How to setup a unit</h2>
                        <p>Procedure to set up a unit in Falta SEZ, including approvals and documentation.</p>
                        <a class="fsez-panel-more" href="procedure-to-set-up-a-unit.php">Read more</a>
                    </article>
                    <article class="fsez-about-card">
                        <h2>Right to Information</h2>
                        <p>Point of contact and proactive disclosure under the Right to Information Act, 2005.</p>
                        <a class="fsez-panel-more" href="right-to-information.php">Read more</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- start partner -->
        <?php include("includes/partner.php"); ?>
        <!-- end partner -->

        <!-- start footer -->
        <?php include("includes/footer.php"); ?>
        <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
