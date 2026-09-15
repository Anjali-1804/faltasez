<?php
include("application-top.php");
$org = isset($gbl_row["org_name"]) ? $gbl_row["org_name"] : "Falta SEZ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Falta SEZ, GIGW, accessibility, help">
    <meta name="description" content="Help and accessibility guidance for the Falta SEZ website.">
    <title><?php echo htmlspecialchars($org); ?> | Help</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper event-single-page">
        <?php include("includes/header.php"); ?>
        <section class="repo page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Help</li>
                    </ol>
                    <h1><span>Website Help</span></h1>
                </div>
            </div>
        </section>
        <section class="event-single-main-content">
            <div class="container">
                <div class="about-event">
                    <div class="content">
                        <h2>How to use this website</h2>
                        <p>This website follows the Guidelines for Indian Government Websites (GIGW 3.0) and Web Content Accessibility Guidelines (WCAG 2.1 Level AA).</p>
                        <h3>Skip to main content</h3>
                        <p>Press Tab on page load to reach the “Skip to main content” link. Activate it to move past the header and menu.</p>
                        <h3>Text size</h3>
                        <p>Use A-, A and A+ in the top bar to decrease, reset or increase text size. Your choice is saved in this browser.</p>
                        <h3>Colour contrast</h3>
                        <p>Use High Contrast for yellow text on a black background. Choose Normal Contrast to return to the standard theme.</p>
                        <h3>Language</h3>
                        <p>Use the language selector in the top bar to choose English, Hindi or Bengali. The default language of this website is English. The Government of India identity is shown as Government of India | भारत सरकार.</p>
                        <h3>Screen readers</h3>
                        <p>See the Screen Reader Access page for compatible assistive technologies such as NVDA and JAWS.</p>
                        <p><a href="screen-reader.php">Screen Reader Access</a></p>
                        <h3>Search</h3>
                        <p>Use the search box next to the organisation identity to find news, tenders, circulars, vacancies and forms.</p>
                        <h3>Documents</h3>
                        <p>Downloadable files open in a new window. Titles indicate PDF or other formats where known.</p>
                        <h3>Need more help?</h3>
                        <p>See Frequently Asked Questions or the Contact Us page.</p>
                        <p><a href="faq.php">FAQ</a> · <a href="contact.php">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
