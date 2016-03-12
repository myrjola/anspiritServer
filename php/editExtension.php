<?php
  if(isset($_POST['devId']) && isset($_POST['devPassword']) && isset($_POST['extensionId']) && isset($_POST['extensionName'])){
    //Got request to update extension with id $_POST['extensionId'];
    //Set data to variables
    $devId = $_POST['devId'];
    $devPassword = $_POST['devPassword'];
    $extensionId = $_POST['extensionId'];
    $extensionName = $_POST['extensionName'];
    //Validate user access to edit extension
  }
?>
