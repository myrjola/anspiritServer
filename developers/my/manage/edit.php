<?php
  //Get all data for extension to edit
  //extension id = $_GET['extension'];
  //extension name = $_GET['name'];
  if(isset($_GET['extension']) && isset($_GET['name'])){
    //Request recieved
    //Get data for extension to insert in inputs
    $mysqli = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b2a32c755154bf", "c0b4e78d", "anspiritMain");
    $query = "SELECT * FROM `extensions` WHERE `id` = " . $_GET['extension'];
    if($result = $mysqli -> query($query)){
      if($row = $result -> fetch_assoc()){
        //$row is extension from database
        $name = $row['name'];
        $price = $row['price'];
        $pathToExt = $row['pathToExt'];
        $linkToIcon = $row['icon'];
        $description = $row['description'];
      }else{
        //No extension found
      }
    }else{
      //failed to execute query
    }
  }else{
    //no request
    //redirect
    header("Location: http://anspirit.org");
  }
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
        margin-left: -5px;
        width: 100%;
        height: 20px;
        font-size: 15px;
        border-radius: 0px;
        background: #f4f4f4;
        color: rgb(40, 40, 40);
      }
      textarea{
        background: #f4f4f4;
        color: rgb(40, 40, 40);
        font-size: 15px;
        margin-left: -5px;
        width: 100%; 
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
      //Update input field values with real data
      $("document").ready(function(){
        $(".name").val("<?php echo $name; ?>");
        $(".description").val("<?php echo $description; ?>");
        $(".price").val("<?php echo $price; ?>");
        $(".files").val("<?php echo $pathToExt; ?>");
        $(".icon").val("<?php echo $linkToIcon; ?>");
      });
    </script>
  </head>
  <body>
    <h1>Edit extension</h1>
    <form action="/php/editExtension.php" method="post">
      Name: <br>
      <input type="text" name="name" class="field name"><br>
      Description: <br>
      <textarea name="description" rows="8" class="description"></textarea><br>
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
