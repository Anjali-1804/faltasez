<?php 
require("admin/class.phpmailer.php");
include("includes/function.php");

$from  = check_sanity($_POST['email']);
$sender_name = check_sanity($_POST['name']);
$subject = check_sanity($_POST['subject']);
$notes = check_sanity($_POST['message']);

$headers = 'From: ' . $sender_name;

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "fsez.gov.in";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "Enter Username";
$mail->Password = "Enter Password";

$mail->From = "$from";
$mail->FromName = $headers;
$mail->AddAddress('fsez@nic.in');
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);
$mail->Subject = "A visitor has contacted";
$mail->Body = "<p> Dear Admin, <br><br>" .ucfirst($sender_name). " has send you a message. </p> 
               Here are the detail : <br><br>
               Subject : " .$subject. "<br><br>
               Email : " .$from. "<br><br>
               Message : " .$notes. "<br><br><br>
               Thanks and Regards";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
?>















