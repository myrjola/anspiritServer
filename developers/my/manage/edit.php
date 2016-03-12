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
    <script type="text/javascript">
      //Update input field values with real data
    </script>
  </head>
  <body>
    <h1>Edit extension</h1>
    <form class="" action="/php/editExtension.php" method="post">
      <input type="text" name="name">
      <input type="hidden" name="devId" value="developer id">
      <input type="hidden" name="devPassword" value="developer password">
      <input type="hidden" name="extensionId" value="extension id">
      <input type="submit" value="Update">
    </form>
  </body>
</html>
