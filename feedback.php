<?php
include("application-top.php");

/**
 * Website feedback form.
 *
 * GIGW requires feedback to be collected through an online form. Submissions
 * are stored in fsez_contact_enquiries with the reason "Website feedback" so
 * the office reads them in the same place as other enquiries, and so this page
 * needs no mail credentials to work.
 */

$fbForm = array("name" => "", "email" => "", "phone" => "", "notes" => "");
$errors = array();
$sent = false;

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($fbForm as $key => $ignored) {
        $fbForm[$key] = isset($_POST[$key]) ? trim(strip_tags($_POST[$key])) : "";
    }

    // Unlabelled field, hidden from users and screen readers. Automated
    // submissions fill it in; people never see it. Avoids a CAPTCHA, which
    // would itself be an accessibility barrier.
    $trap = isset($_POST["website"]) ? trim($_POST["website"]) : "";

    if ($fbForm["name"] === "" || strlen($fbForm["name"]) > 120) {
        $errors["name"] = "Enter your name, up to 120 characters.";
    }
    if (!filter_var($fbForm["email"], FILTER_VALIDATE_EMAIL) || strlen($fbForm["email"]) > 180) {
        $errors["email"] = "Enter an email address in the format name@example.com so we can reply.";
    }
    if ($fbForm["phone"] !== "" && !preg_match('/^[0-9 +-]{7,15}$/', $fbForm["phone"])) {
        $errors["phone"] = "Enter a phone number using digits, spaces, plus or hyphen only.";
    }
    if ($fbForm["notes"] === "") {
        $errors["notes"] = "Enter your feedback so we know what to act on.";
    } elseif (strlen($fbForm["notes"]) > 5000) {
        $errors["notes"] = "Shorten your feedback to 5000 characters or fewer.";
    }

    if (count($errors) === 0 && $trap === "") {
        $ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "";
        $ip = filter_var($ip, FILTER_VALIDATE_IP) ? $ip : "";
        $reason = "Website feedback";
        $stmt = mysqli_prepare(
            $con,
            "insert into fsez_contact_enquiries (name, email, phone, reason, message, ip_address, submitted_on) values (?, ?, ?, ?, ?, ?, NOW())"
        );
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $fbForm["name"], $fbForm["email"], $fbForm["phone"], $reason, $fbForm["notes"], $ip);
            $sent = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        if ($sent) {
            $fbForm = array("name" => "", "email" => "", "phone" => "", "notes" => "");
        } else {
            $errors["form"] = "We could not save your feedback because of a problem at our end. Please email fsez@nic.in instead.";
        }
    } elseif ($trap !== "") {
        // Silently accept and discard automated submissions.
        $sent = true;
    }
}

function fb_val($value)
{
    return htmlspecialchars($value, ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Send feedback, suggestions or a complaint about the Falta Special Economic Zone website.">
    <meta name="keywords" content="FSEZ feedback, Falta SEZ website feedback, suggestions, complaint">
    <title><?php echo htmlspecialchars($gbl_row["org_name"]); ?> | Feedback</title>
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
                            <li aria-current="page">Feedback</li>
                        </ol>
                    </nav>
                    <h1 id="feedback-heading">Website <span>Feedback</span></h1>
                </div>
            </div>
        </section>

        <section class="gov-docs" aria-labelledby="feedback-heading">
            <div class="container">
                <div class="gov-docs-intro">
                    <p>Tell us what works and what does not on this website. We read every submission and reply to the email address you give us. For a formal grievance, please use the <a href="public-grievance.php">public grievance</a> route instead.</p>
                </div>

                <?php if ($sent) { ?>
                <div class="gov-form-success" role="alert">
                    <h2>Thank you, your feedback has been received</h2>
                    <p>We have recorded your feedback and will reply to you by email if a response is needed. You can also reach the office on <a href="tel:+913322872263">+91-33-2287-2263</a>.</p>
                </div>
                <?php } else { ?>

                <?php if (count($errors) > 0) { ?>
                <div class="gov-form-errors" role="alert">
                    <h2>There is a problem with this form</h2>
                    <ul>
                        <?php foreach ($errors as $field => $message) { ?>
                        <li><?php if ($field !== "form") { ?><a href="#fb-<?php echo htmlspecialchars($field); ?>"><?php echo htmlspecialchars($message); ?></a><?php } else { echo htmlspecialchars($message); } ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>

                <form class="gov-form" method="post" action="feedback.php" novalidate>
                    <p class="gov-form-hint">Fields marked <span aria-hidden="true">*</span><span class="sr-only">required</span> are required.</p>

                    <div class="gov-form-row">
                        <label for="fb-name">Your name <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                        <?php if (isset($errors["name"])) { ?>
                        <p class="gov-form-error" id="fb-name-error"><span class="sr-only">Error: </span><?php echo htmlspecialchars($errors["name"]); ?></p>
                        <?php } ?>
                        <input type="text" id="fb-name" name="name" maxlength="120" required aria-required="true"
                            <?php if (isset($errors["name"])) { ?>aria-invalid="true" aria-describedby="fb-name-error"<?php } ?>
                            value="<?php echo fb_val($fbForm["name"]); ?>">
                    </div>

                    <div class="gov-form-row">
                        <label for="fb-email">Email address <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                        <p class="gov-form-help" id="fb-email-help">We use this only to reply to your feedback.</p>
                        <?php if (isset($errors["email"])) { ?>
                        <p class="gov-form-error" id="fb-email-error"><span class="sr-only">Error: </span><?php echo htmlspecialchars($errors["email"]); ?></p>
                        <?php } ?>
                        <input type="email" id="fb-email" name="email" maxlength="180" required aria-required="true"
                            autocomplete="email"
                            aria-describedby="fb-email-help<?php if (isset($errors["email"])) { echo " fb-email-error"; } ?>"
                            <?php if (isset($errors["email"])) { ?>aria-invalid="true"<?php } ?>
                            value="<?php echo fb_val($fbForm["email"]); ?>">
                    </div>

                    <div class="gov-form-row">
                        <label for="fb-phone">Phone number (optional)</label>
                        <?php if (isset($errors["phone"])) { ?>
                        <p class="gov-form-error" id="fb-phone-error"><span class="sr-only">Error: </span><?php echo htmlspecialchars($errors["phone"]); ?></p>
                        <?php } ?>
                        <input type="tel" id="fb-phone" name="phone" maxlength="15" autocomplete="tel"
                            <?php if (isset($errors["phone"])) { ?>aria-invalid="true" aria-describedby="fb-phone-error"<?php } ?>
                            value="<?php echo fb_val($fbForm["phone"]); ?>">
                    </div>

                    <div class="gov-form-row">
                        <label for="fb-notes">Your feedback <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
                        <p class="gov-form-help" id="fb-notes-help">Include the page name or address if your feedback is about a particular page.</p>
                        <?php if (isset($errors["notes"])) { ?>
                        <p class="gov-form-error" id="fb-notes-error"><span class="sr-only">Error: </span><?php echo htmlspecialchars($errors["notes"]); ?></p>
                        <?php } ?>
                        <textarea id="fb-notes" name="notes" rows="6" maxlength="5000" required aria-required="true"
                            aria-describedby="fb-notes-help<?php if (isset($errors["notes"])) { echo " fb-notes-error"; } ?>"
                            <?php if (isset($errors["notes"])) { ?>aria-invalid="true"<?php } ?>><?php echo fb_val($fbForm["notes"]); ?></textarea>
                    </div>

                    <div class="gov-form-trap" aria-hidden="true">
                        <label for="fb-website">Leave this field empty</label>
                        <input type="text" id="fb-website" name="website" tabindex="-1" autocomplete="off" value="">
                    </div>

                    <button type="submit" class="gov-form-submit">Send feedback</button>
                </form>
                <?php } ?>
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
