<?php
  if(isset($_POST['text']) && isset($_POST['to']) && isset($_POST['from']) && isset($_POST['subject'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];
    $mysqli = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b2a32c755154bf", "c0b4e78d", "anspiritMain");
    if($mysqli != null){
    	if($mysqli->query("INSERT INTO `email` (`from`, `to`, `subject`, `text`) VALUES ('$from', '$to', '$subject', '$text')")){
    		  echo "Done, your email has been recieved!";
    	}
    }
  }else{
    echo "You don't have access!";
  }
 ?>
