<?php
if(isset($_POST['send'])){
  require 'PHPMailerAutoload.php';

  $mail = new PHPMailer;

  $mail->isSMTP();                                        // Set mailer to use SMTP
  $mail->Host = 'smtp.sendgrid.net';             // Specify main/backup SMTP servers
  $mail->SMTPAuth = true;                           // Enable SMTP authentication
  $mail->Username = 'azure_2eba721938d24ffa0fb3a2d9fde6cc43@azure.com';    // SMTP username
  $mail->Password = 'Junction2015';    // SMTP password
  $mail->SMTPSecure = 'tls';                        // Enable TLS/SSL encryption
  $mail->Port = 587;                                      // TCP port to connect to

  $mail->From = $_POST['from'];
  $mail->FromName = $_POST['fromName'];
  $mail->addAddress($_POST['to'], $_POST['toName']);     // Add a recipient

  $mail->WordWrap = 50;                              // Set word wrap to 50 characters
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $_POST['title'];
  $mail->Body    = $_POST['emailContent'];

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email</title>
    <link rel="stylesheet" href="../admin.css" media="screen" charset="utf-8">
  </head>
  <body>
    <?php if($_COOKIE['secret'] != 'Junction2015'){
      echo "<h1> 404 </h1><br><h3>Page not found</h3>";
    }else{
      echo '
          <h1>Email Client</h1>
          <form method="post">
          <table align="center">
            <tr>
              <td><h3>From: </h3></td><td><input type="email" name="from"></td>
            </tr>
            <tr>
              <td><h3>From Name: </h3></td><td><input type="text" name="fromName"></td>
            </tr>
            <tr>
              <td><h3>To: </h3></td><td><input type="email" name="to"></td>
            </tr>
            <tr>
              <td><h3>To Name: </h3></td><td><input type="text" name="toName"></td>
            </tr>
            <tr>
              <td><h3>Title: </h3></td><td><input type="text" name="title"></td>
            </tr>
            <tr>
              <td><h3>Body: </h3></td><td><textarea name="emailContent" rows="20" cols="50"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" name="send" value="Send"></td>
            </tr>
          </table>
          </form>';
    }
    ?>
  </body>
</html>
