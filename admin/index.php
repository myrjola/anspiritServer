<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                          // Enable verbose debug output

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.sendgrid.net';             // Specify main/backup SMTP servers
$mail->SMTPAuth = true;                           // Enable SMTP authentication
$mail->Username = 'azure_2eba721938d24ffa0fb3a2d9fde6cc43@azure.com';    // SMTP username
$mail->Password = 'Junction2015';    // SMTP password
$mail->SMTPSecure = 'tls';                        // Enable TLS/SSL encryption
$mail->Port = 587;                                      // TCP port to connect to

$mail->From = 'tim@anspirit.net';
$mail->FromName = 'From Anspirit website';
$mail->addAddress('timofei.borovkov@hotmail.com', 'Dear Tim');     // Add a recipient

$mail->WordWrap = 50;                              // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
