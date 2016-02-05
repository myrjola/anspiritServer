<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin CPanel</title>
    <link rel="stylesheet" href="admin.css" media="screen" charset="utf-8">
  </head>
  <body>
    <?php
      if($_COOKIE['secret'] == 'Junction2015'){
        echo "<iframe src='adminMenu.html' width='200px' height='100%'></iframe>";
      }else{
        echo "<h1> 404 </h1><br><h3>Page not found</h3>";
      }
     ?>
  </body>
</html>
