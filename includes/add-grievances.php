<?php
include "../application-top.php";
include("class.phpmailer.php");

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = mysqli_real_escape_string($con, check_sanity($_POST["name"]));
    $email = mysqli_real_escape_string($con, check_sanity($_POST["email"]));
    $phone = mysqli_real_escape_string($con, check_sanity($_POST["phone"]));
    $company = mysqli_real_escape_string($con, check_sanity($_POST["company"]));
    $subject = mysqli_real_escape_string($con, check_sanity($_POST["subject"]));
    $message = mysqli_real_escape_string($con, check_sanity($_POST["message"]));

    /* Sending Email Notification Start  */
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Priority = 1;
    $mail->Port = 587;
    $mail->Username = FSEZ_SMTP_USERNAME;
    $mail->Password = FSEZ_SMTP_PASSWORD;
    $mail->IsHTML(true);

    $sql = "insert into fsez_grievances (name, email, phone, company, subject, message, submitted_on) values ('$name', '$email', '$phone', '$company', '$subject', '$message', NOW())";
    $res = mysqli_query($con, $sql);

    if ($res && isset($_FILES['grievance_file_name']['name'])) {
        $totalfiles = count(array_unique($_FILES['grievance_file_name']['name']));
        $grievance_id = mysqli_insert_id($con);

        for ($i = 0; $i < $totalfiles; $i++) {
            $filename = time() . $_FILES['grievance_file_name']['name'][$i];
            if (move_uploaded_file($_FILES["grievance_file_name"]["tmp_name"][$i], '../admin/upload_grievance_documents/' . $filename)) {
                $gsql = "insert into fsez_grievances_documents (grievance_file_name, grievance_id, submitted_on) values('$filename', '$grievance_id', NOW())";
                $gres =  mysqli_query($con, $gsql);
                if ($gres) {
                    echo '0';

                    $mail->SetFrom('avikdatta2020@gmail.com');
                    $mail->AddReplyTo($email);
                    $mail->AddAddress("audi4avik@gmail.com");
                    $mail->Subject = "Grievance Raised - " . $subject;
                    $mail->MsgHTML("<p> Dear Admin, <br><br>" . ucfirst($name) . " has raised a grievance. </p> 
                    Here are the detail : <br><br>
                    Email : " . $email . "<br><br>
                    Contact : " . $phone . "<br><br>
                    Company : " . $company . "<br><br>
                    Message : " . $message . "<br><br><br>
                    Thanks and Regards");

                    foreach ($_FILES["grievance_file_name"]["name"] as $k => $v) {
                        $mail->AddAttachment($_FILES["grievance_file_name"]["tmp_name"][$k], $_FILES["grievance_file_name"]["name"][$k]);
                    }
                    if (!$mail->Send()) {
                        echo "1";
                    } else {
                        echo "0";
                    }
                } else {
                    echo 'Error: ' . mysqli_error($con);
                }
            } else {
                echo 'Error in uploading file - ' . $_FILES['grievance_file_name']['name'][$i] . '<br/>';
            }
        }
    } else if ($res && !isset($_FILES['grievance_file_name']['name'])) {
        echo '0';
        $mail->SetFrom('avikdatta2020@gmail.com');
        $mail->AddReplyTo($email);
        $mail->AddAddress("subhurocks@gmail.com");
        $mail->Subject = "Grievance Raised - " . $subject;
        $mail->MsgHTML("<p> Dear Admin, <br><br>" . ucfirst($name) . " has raised a grievance. </p> 
                Here are the detail : <br><br>
                Email : " . $email . "<br><br>
                Contact : " . $phone . "<br><br>
                Company : " . $company . "<br><br>
                Message : " . $message . "<br><br><br>
                Thanks and Regards");

        if (!$mail->Send()) {
            echo "1";
        } else {
            echo "0";
        }
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
}
