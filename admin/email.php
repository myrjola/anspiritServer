<?php
 include_once "swift/swift_required.php";
 $text = "Hi!\nHow are you?\n";
 $html = "<html>
       <head></head>
       <body>
           <p>Hi!<br>
               How are you?<br>
           </p>
       </body>
       </html>";
 // This is your From email address
 $from = array('tim@anspirit.org' => 'Tim from Anspirit');
 // Email recipients
 $to = array(
       'timofei.borovkov@hotmail.com'=>'Dear customer!'
 );
 // Email subject
 $subject = 'Example PHP Email';

 // Login credentials
 $username = 'azure_2eba721938d24ffa0fb3a2d9fde6cc43@azure.com';
 $password = 'Junction2015';

 // Setup Swift mailer parameters
 $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
 $transport->setUsername($username);
 $transport->setPassword($password);
 $swift = Swift_Mailer::newInstance($transport);

 // Create a message (subject)
 $message = new Swift_Message($subject);

 // attach the body of the email
 $message->setFrom($from);
 $message->setBody($html, 'text/html');
 $message->setTo($to);
 $message->addPart($text, 'text/plain');

 // send message
 if ($recipients = $swift->send($message, $failures))
 {
     // This will let us know how many users received this message
     echo 'Message sent out to '.$recipients.' users';
 }
 // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }

 if(isset($_POST['sendBtn'])){
   $fromName = $_POST['fromName'];
   $fromEmail = $_POST['fromEmail'];
   $toName = $_POST['toName'];
   $toEmail = $_POST['toEmail'];
   $mailHeader = $_POST['header'];
   $mailContent = $_POST['content'];

   $text = $mailContent;
   $html = $mailContent;
   // This is your From email address
   $from = array($fromEmail => $fromName);
   // Email recipients
   $to = array(
         $toEmail=>$toName
   );
   // Email subject
   $subject = $mailHeader;

   // Login credentials
   $username = 'azure_2eba721938d24ffa0fb3a2d9fde6cc43@azure.com';
   $password = 'Junction2015';

   // Setup Swift mailer parameters
   $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
   $transport->setUsername($username);
   $transport->setPassword($password);
   $swift = Swift_Mailer::newInstance($transport);

   // Create a message (subject)
   $message = new Swift_Message($subject);

   // attach the body of the email
   $message->setFrom($from);
   $message->setBody($html, 'text/html');
   $message->setTo($to);
   $message->addPart($text, 'text/plain');

   // send message
   if ($recipients = $swift->send($message, $failures))
   {
       // This will let us know how many users received this message
       echo 'Message sent out to '.$recipients.' users';
   }
   // something went wrong =(
   else
   {
       echo "Something went wrong - ";
       print_r($failures);
   }
 }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Anspirit email</title>
   </head>
   <body>
     <?php if($_SESSION['username']): ?>
         <p>You are logged in as <?=$_SESSION['username']?></p>
         <p><a href="../admin/index.php?logout=1">Logout</a></p>

      <!-- Mail UI -->
      <form method="post">
         <table>
           <tr>
             <td>
               <h3>From name: </h3>
             </td>
             <td>
               <input type="text" name="fromName">
             </td>
           </tr>
           <tr>
             <td>
               <h3>From email: </h3>
             </td>
             <td>
               <input type="email" name="fromEmail">
             </td>
           </tr>
           <tr>
             <td>
               <h3>To name: </h3>
             </td>
             <td>
               <input type="text" name="toName">
             </td>
           </tr>
           <tr>
             <td>
               <h3>To email: </h3>
             </td>
             <td>
               <input type="email" name="toEmail">
             </td>
           </tr>
           <tr>
             <td>
               <h3>Header: </h3>
             </td>
             <td>
               <input type="text" name="header">
             </td>
           </tr>
           <tr>
             <td>
               <h3>Content: </h3>
             </td>
             <td>
               <textarea name="content" rows="30" cols="50"></textarea>
             </td>
           </tr>
           <tr>
             <input type="submit" value="Send" name="sendBtn">
           </tr>
         </table>
      </form>

     <?php endif; ?>
     <h1>You don't have access!</h1>
   </body>
 </html>
