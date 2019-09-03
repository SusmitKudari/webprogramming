<?php
session_start();//get the session
 if(isset($_GET['id'])){//check if we get id from a get
 	$id=$_GET['id'];//put the id of selected post in a variable
 	if(isset($_SESSION['id'])){//check if session exsist
		
		$userid=$_SESSION['id'];//put the  value of session id into user id
		include 'connection.php';
    
    $delete=mysqli_query($db,"DELETE FROM newspost where id='$id'");
    if($delete){
        echo "success";
    //delete post with the get id
    echo "<script language='Javascript'>";
               //echo "document.location.replace('./home2.php')";//go to user page
               echo "</script>";
        }
}
 }
else{//if there is no session              

 
}
?>