<?php
include_once'connection.php';
$db=mysqli_connect($servername,$username,$password,$dbname);


//check connection 

         if($db->connect_error){
    die("connection failed:".$db);
}

 /*else{
  echo "connection ok";
 }*/ 


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><center>PUBLICATIONS</center></h1>

<!--<div class="topnav" id="myTopnav">
  <a href="publish.php">PUBLISH</a>
  <a href="manage.php">MANAGE PUBLICATION</a>
  <a href="#">LOGOUT</a>
  <a href="index.php">Back</a>

  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>-->
</body>
</html> 
<?php

$sql=mysqli_query($db,"SELECT * FROM newspost");
$num=mysqli_num_rows($sql);
if($num==0){
    echo "no post yet";
}else{
    while($rows=$sql->fetch_assoc()){
        $id=$rows['id'];
        $title=$rows['title'];
        $comment=$rows['comment'];
        $image=$rows['img'];
        $email_contact=$rows['email_contact'];
        
  
    
?>
<div class="Image">
    <?php echo "<img src=data:image/jpg;base64,$image width=20%>";?>
</div>
<div class="Title">
    <?php echo $title;?>
</div>
<div class="Comment">
    <?php echo $comment;?>
</div>

<div class="Contact">
    <?php echo $email_contact;?>
</div>

<?php
    }
}
?>