<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#" class="active">PUBLISH</a>
  <a href="manage1.php">MANAGE PUBLICATION</a>
  <a href="logout.php">LOGOUT</a>
  <!--<a href="#about">About</a>-->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<body>
<?php
 include 'connection.php';
 if(isset($_POST['submit'])){
 $id=$_POST['show'];
 //echo $id;
 $select=mysqli_query($db,"SELECT * FROM newspost WHERE id='$id'");
  if ($select) {
  while ($r=mysqli_fetch_assoc($select)) {
    $id=$r['id'];
    $title=$r['title'];
    $comment=$r['comment'];
    $image=$r['img'];
    $email_contact=$r['email_contact'];
    $link="manage.php?id=".$id;
    echo '<a href="'.$link.'">Edit</a>';
    echo"<br>";
    $link="delete.php?id=".$id;
    echo '<a href="'.$link.'">delete</a>';
      
  ?>
    
    <?php echo $id; ?>
      <br><br>
      <?php echo $title; ?>
        <br><br>
      <?php echo $comment; ?>  
      <br><br>
      <?php echo "<img src=data:image/jpg;base64,$image width=20%>";?><br><br>
      
      
      <?php echo $email_contact; ?>
      <br><br>
      

    
    
     <?php
  }
   echo "</body>";
}else{
  echo $db->error;
}

 }
?>
</html>
