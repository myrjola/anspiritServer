<?php
  if($page != true){
    //Direct request
    //redirect to home page
    $newURL = 'http://anspirit.org/developers';
    header('Location: '.$newURL);
  }
 ?>
 <html>
  <h1>New Extension</h1>
 </html>
