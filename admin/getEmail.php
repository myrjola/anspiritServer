<?php
/*
  if(isset($_POST['text']) && isset($_POST['to']) && isset($_POST['from']) && isset($_POST['subject'])){
    if($mysqli = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b2a32c755154bf", "c0b4e78d", "anspiritMain")){
      if($mysqli->query("INSERT INTO email (from, to, subject, text) VALUES (\'$_POST['from']\', \'$_POST['to']\', \' $_POST['subject']\', \' $_POST['text']\')")){
        echo "Done, your email has been recieved!";
      }
    }
  }
  */
  if(isset($_POST['text'])){
    $file = fopen("test.txt","w");
    echo fwrite($file, "Got email: ");
    fclose($file);  
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Thank's for your email!</title>
   </head>
   <body>
     <h1>Tank You!</h1>
   </body>
 </html>
