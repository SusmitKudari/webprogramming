<?php

include_once'publish_details.php';

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#" >PUBLISH</a>
  <a href="manage1.php">MANAGE PUBLICATION</a>
  <a href="logout.php">LOGOUT</a>
  <!--<a href="#about">About</a>-->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<form action="publish_details.php" method="POST" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2>Publish</h2>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Title" name="title">
  </div>

  
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Comment" name="cmt">
  </div>

  <div class="input-container">
    <input class="input-field" type="file" placeholder="image" name="image">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="website link or contact and email" name="email_weblink">
  </div>


  
  <input type="submit" value="publish" name="publish" class="btn">
</form>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html> 
>