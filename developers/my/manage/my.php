<?php
  if($page != true){
    //Direct request
    //redirect to home page
    $newURL = 'http://anspirit.org/developers';
    header('Location: '.$newURL);
  }
 ?>
 <h1>My Extensions</h1>
