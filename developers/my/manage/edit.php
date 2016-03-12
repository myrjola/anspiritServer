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
    <link rel="shortcut icon" type="image/x-icon" href="../../../images/anspirit.ico">
    <link rel="apple-touch-icon" href="../../../images/anspirit.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style media="screen">
      body{
        background: url('http://www.walldevil.com/wallpapers/w08/gradients-simple-background-light-colorful-abstract.jpg') no-repeat fixed center center;
        background-size: cover;
        font-family: Montserrat;
      }
      .h1{
        text-align: center;
        font-size: 25px;
      }
      .field{
        width: 100%;
        height: 20px;
        font-size: 15px;
        border-radius: 0px;
        background: #fff;
        color: rgb(40, 40, 40);
      }
      .submit{
        height: 30px;
        font-size: 20px;
        border-radius: 0px;
        background-color: rgb(4, 184, 0);
        color: rgb(40, 40, 40);
        width: 200px;
        margin-left: calc(50% - 100px);
      }
    </style>
    <script type="text/javascript">
      //Update input field values with real data
    </script>
  </head>
  <body>
    <h1>Edit extension</h1>
    <form class="" action="/php/editExtension.php" method="post">
      <input type="text" name="name" class="field"><br>

      <!-- Hidden inputs -->
      <input type="hidden" name="devId" value="developer id">
      <input type="hidden" name="devPassword" value="developer password">
      <input type="hidden" name="extensionId" value="extension id">
      <!-- Hidden inputs end -->

      <input type="submit" value="Update" class="submit">
    </form>
  </body>
</html>
