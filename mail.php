<!--<?php

//$to = "aishashree321@gmail.com";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: monikamoni6598@gmail.com" . "\r\n" .
//$headers =  'MIME-Version: 1.0' . "\r\n"; 
//$headers .= 'From: Your name <monikamoni6598@gmail.com>' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//mail($to, $subject, $body, $headers);

//mail($to,$subject,$txt,$headers);
?>-->

<!--
<?php
//require_once('../PHPMailer/PHPMailerAutoload.php');
//require '../PHPMailer/PHPMailerAutoload.php';

//$mail = new PHPMailer(); // create a new object
//$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//$mail->SMTPAuth = true; // authentication enabled
//$mail->SMTPSecure = 'tlsls'; // secure transfer enabled REQUIRED for Gmail
//$mail->Host = 'smtp.gmail.com';
//$mail->Port = 465; // or 587
//$mail->IsHTML(true);
//$mail->Username = 'aishashree321@gmail.com';
//$mail->Password = 'aishu@123';
//$mail->SetFrom("aishashree321@gmail.com");

//$mail->Subject = "Test";
//$mail->Body = "hello";

//$mail->AddAddress("aishashree321@gmail.com");
//die("asdasd");


 //if(!$mail->Send()) {
 	//die("sadsa");
    //echo "Mailer Error: " . $mail->ErrorInfo;
// }// else {
   // echo "Message has been sent";
 }
?>

-->

<?php
require_once('../PHPMailer/class.phpmailer.php');
//require '../PHPMailer/class.phpmailer.php';

$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'aishashree321@gmail.com';
$mail->Password = 'aishu@123';
$mail->SMTPAuth = true;

$mail->From = 'aishashree321@gmail.com';
$mail->FromName = 'aishashree321@gmail.com';
$mail->AddAddress('aishashree321@gmail.com');
//$mail->AddReplyTo('aishashree321@gmail.com', 'Information');

$mail->IsHTML(true);
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = "Hello";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}
?>