
<?php
 session_start();
 include_once "swift/swift_required.php";
 if(isset($_POST['sendBtn'])){
   $fromName = $_SESSION['username'] + " from Anspirit";
   $fromEmail = $_SESSION['username'] + "@anspirit.org";
   $toName = $_POST['toName'];
   $toEmail = $_POST['toEmail'];
   $mailHeader = $_POST['header'];
   $mailContent = $_POST['content'];
 }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Anspirit email</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <style media="screen">
       .sent{
         color: red;
         font-size: 25px;
       }
     </style>
     <script type="text/javascript">
      document.ready(function(){

      });
     </script>
   </head>
   <body>
      <!-- Mail UI -->
      <div class="sent"></div>
      <form method="post">
         <table>
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
               <textarea name="content" rows="20" cols="40"></textarea>
             </td>
           </tr>
           <tr>
             <td><button onclick="send()">Send</button></td>
           </tr>
         </table>
      </form>
   </body>
 </html>
