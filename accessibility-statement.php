<?php
include("application-top.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Accessibility statement for the Falta Special Economic Zone website, including conformance level, accessibility features, known limitations and how to report a problem.">
    <meta name="keywords" content="accessibility statement, WCAG 2.1 AA, GIGW 3.0, Falta SEZ accessibility">
    <title><?php echo htmlspecialchars($gbl_row["org_name"]); ?> | Accessibility Statement</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper gov-page">
        <?php include("includes/header.php"); ?>

        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li aria-current="page">Accessibility Statement</li>
                        </ol>
                    </nav>
                    <h1 id="a11y-heading">Accessibility <span>Statement</span></h1>
                </div>
            </div>
        </section>

        <section class="gov-docs" aria-labelledby="a11y-heading">
            <div class="container">
                <div class="gov-docs-intro">
                    <p>The Office of the Development Commissioner, Falta Special Economic Zone, is committed to making this website usable by everyone, including people with disabilities, irrespective of the technology they use.</p>
                </div>

                <div class="gov-prose">
                    <h2>Standards we follow</h2>
                    <p>This website is built to conform to the Guidelines for Indian Government Websites and Apps (GIGW 3.0) and to Level AA of the Web Content Accessibility Guidelines (WCAG) 2.1 published by the World Wide Web Consortium. Conformance is being achieved in stages, and the position on this page is reviewed as that work progresses.</p>

                    <h2>Accessibility features on this website</h2>
                    <ul>
                        <li><strong>Skip to main content:</strong> the first link on every page moves keyboard and screen reader users straight past the navigation.</li>
                        <li><strong>Keyboard access:</strong> all menus, tabs, forms and document tables can be reached and operated with the keyboard alone, and the item with keyboard focus is always outlined.</li>
                        <li><strong>Text size:</strong> the <span class="notranslate">A-</span>, <span class="notranslate">A</span> and <span class="notranslate">A+</span> controls in the top bar change the text size, and your choice is remembered on later visits.</li>
                        <li><strong>High contrast:</strong> the High Contrast control switches the site to a black background with yellow text for readers who need stronger contrast.</li>
                        <li><strong>Language:</strong> the language selector in the top bar offers English, Hindi and Bengali for the site interface and for the homepage and common labels. The Government of India identity is shown as Government of India | भारत सरकार.</li>
                        <li><strong>Screen readers:</strong> pages use headings, landmarks and table markup so screen readers can announce structure. See <a href="screen-reader.php">Screen Reader Access</a> for a list of screen readers and where to get them.</li>
                        <li><strong>Documents:</strong> every download states its format and, where known, its file size, and tells you that it opens in a new window.</li>
                        <li><strong>Responsive layout:</strong> pages reflow for small screens and can be enlarged to 200 per cent without loss of content.</li>
                        <li><strong>No moving content you cannot stop:</strong> the homepage slideshow and the updates ticker both have a pause control, and they do not autoplay for visitors whose device asks for reduced motion.</li>
                    </ul>

                    <h2>Known limitations</h2>
                    <p>We would rather tell you where this website still falls short than leave you to discover it:</p>
                    <ul>
                        <li><strong>Older documents:</strong> many circulars, notices and meeting papers published in earlier years are scans of printed paper. A screen reader cannot read a scanned image, so these files are being replaced with accessible versions. If you need any of them in an accessible format, ask us and we will supply it.</li>
                        <li><strong>File size not always shown:</strong> a small number of documents are served from an older store where the file size cannot be read automatically. The format is always shown.</li>
                        <li><strong>Language coverage:</strong> Hindi and Bengali cover the site chrome and the homepage. Official translations of circulars, forms and inner pages are being added in stages.</li>
                        <li><strong>Video speech:</strong> Yoga Day videos have an on-page transcript and a captions track describing the event. A word-for-word spoken transcript is supplied on request to fsez@nic.in.</li>
                        <li><strong>Third party websites:</strong> links marked as external lead to websites owned by other organisations, whose accessibility we do not control.</li>
                    </ul>

                    <h2>Tell us about a problem</h2>
                    <p>If you cannot reach some part of this website, or you need a document in an accessible format such as tagged PDF, large print or plain text, please tell us. Describe the page and what went wrong, and we will respond.</p>
                    <ul>
                        <li>Use the <a href="feedback.php">website feedback form</a>.</li>
                        <li>Email <a href="mailto:fsez@nic.in">fsez@nic.in</a>.</li>
                        <li>Telephone <a href="tel:+913322872263">+91-33-2287-2263</a> or +91-33-2287-4092.</li>
                        <li>Write to the Office of the Development Commissioner, Falta Special Economic Zone, Nizam Palace, 234/4, A.J.C. Bose Road, Kolkata 700020.</li>
                    </ul>
                    <p>If you are not satisfied with our response, you may raise the matter through <a href="public-grievance.php">public grievance redressal</a>.</p>

                    <h2>How this website was assessed</h2>
                    <p>Accessibility of this website is checked by a combination of automated testing and manual review, including keyboard-only navigation, screen reader testing and colour contrast measurement against the WCAG 2.1 Level AA thresholds. Measured pairs include coffee header on white (13.6:1), body text on the page background (14.1:1), muted text on white (8.8:1) and bronze text or buttons at <span class="notranslate">#7a4e2e</span> on white (7.1:1). Pages are set to print on A4 without the menu, ticker or map. Statement last reviewed on <?php echo fsez_last_updated_html(); ?>.</p>
                </div>
            </div>
        </section>

        <?php include("includes/footer.php"); ?>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-plugin-collection.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
