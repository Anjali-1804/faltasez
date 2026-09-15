<?php
session_start();
include("application-top.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=https://fsez.gov.in/" />
    <meta name="description" content="Your payment to Falta Special Economic Zone could not be completed. Options for retrying or contacting the office.">
    <meta name="keywords" content="Falta SEZ payment failed, FSEZ transaction failed">
    <title><?php echo $gbl_row["org_name"]; ?> | Payment Failed</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="thank-you">
        <div class="container">
            <figure><img src="images/payment-error.png" alt=""></figure>
            <h1>Transaction Failed!</h1>
            <h3>Transaction ID: <?php echo $_SESSION['bank_transaction_id']; ?></h3>
            <h4>Your transaction is failed for the amount of <strong>₹<?php echo $_SESSION['bank_transaction_amount']; ?></strong></h4>
            <p>Please wait, you will be redirected in 5 seconds. You will receive a copy of this transaction details in your mailbox.</p>
            <p>© 2023 - All rights reserved by Falta Special Economic Zone, Government of India</p>
        </div>
        <div class="thank-back1"><img src="images/thank-back1.png" alt=""></div>
        <div class="thank-back2"><img src="images/thank-back2.svg" alt=""></div>
    </div>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
</body>

</html>