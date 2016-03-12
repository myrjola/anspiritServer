<?php
  //Get all data for extension to edit
  //extension id = $_GET['extension'];
  //extension name = $_GET['name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="../../../images/anspirit.ico">
    <link rel="apple-touch-icon" href="../../../images/anspirit.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/dropzone.js"></script>
    <style media="screen">
      body{
        background: url('http://alexgurghis.com/themes/vetro/wp-content/uploads/2013/05/bg3.jpg') no-repeat fixed center center;
        background-size: cover;
        font-family: Montserrat;
        font-size: 20px;
      }
      h1{
        text-align: center;
        font-size: 30px;
      }
      input{
        margin-top: 5px;
      }
      .field{
        margin: 0px;
        width: 100%;
        height: 25px;
        font-size: 15px;
        border-radius: 0px;
        background: #f4f4f4;
        color: rgb(40, 40, 40);
      }
      .submit{
        height: 30px;
        font-size: 20px;
        border-radius: 0px;
        background-color: rgba(0, 133, 255, 0.7);
        color: rgb(40, 40, 40);
        width: 200px;
        margin-left: calc(50% - 100px);
      }
    </style>
    <script type="text/javascript">
      //Setup dropzone
      var Dropzone = require("dropzone");

      //Update input field values with real data
      $("document").ready(function(){
        $(".name").val("Name");
      });
    </script>
  </head>
  <body>
    <h1>Edit extension</h1>
    <form class="dropzone" action="/php/editExtension.php" method="post">
      Name: <br>
      <input type="text" name="name" class="field name"><br>
      Price ($0 - ...): <br>
      <input type="number" name="price" class="field price"><br>
      Files (link to hosted folder): <br>
      <input type="url" name="files" class="field files"><br>
      Icon link (link to hosted image): <br>
      <input type="url" name="price" class="field icon"><br>

      <!-- Hidden inputs -->
      <input type="hidden" name="devId" value="developer id">
      <input type="hidden" name="devPassword" value="developer password">
      <input type="hidden" name="extensionId" value="extension id">
      <!-- Hidden inputs end -->

      <input type="submit" value="Update" class="submit">
    </form>
  </body>
</html>
