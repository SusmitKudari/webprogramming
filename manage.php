<!DOCTYPE html>
<html>
<head>
	<title>Post Something</title>
	<style>
		*{
	margin: 3px;
	padding: 0px;

}
body{
	font-size: 120%;
	background: #F8F8FF;
	background-image: url(./wp37411.jpg);
	background-size: cover;
	background-repeat: no-repeat;

}

form{
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border:1px solid#80C4DE;
	background: white;
	border-radius:0px 0px 10px 10px;
	background: rgba(0,0,0,0.1);
}
input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:3px solid gray;
	background: transparent;

}
h1{
	text-align: center;
	margin-bottom: 30px;
	margin-top: 80px;
}
	</style>
</head>
<body>
	<?php
	/*include 'menu.php';*/
	require 'connection.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	    $select=mysqli_query($db,"SELECT * FROM newspost WHERE id='$id'");
	    $num_rows=mysqli_num_rows($select);
	    if ($num_rows>0) {
	    	while ($rows=$select->fetch_assoc()) {
	    		$id=$rows['id'];
                $title=$rows['title'];
                $comment=$rows['comment'];
                $image=$rows['img'];
                $email_contact=$rows['email_contact'];
	

	    		
	    	
	?>
	<h1>Edit post</h1>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>title</label>
		<input type="text" name="title" value="<?php echo $title ?>"><br><br>

		<label>comment</label>
		<input type="text" name="comment" value="<?php echo $comment ?>"><br><br>

        <label>Image</label>
		<?php echo "<img src= data:image/jpg;base64,$image width='5%' height='5%'>";?>
		<input type="file" name="image"><br><br>

		<label>email</label>
		<input type="text" name="email_contact" value="<?php echo $email_contact ?>"><br><br>

       <input type="submit" name="submit" value="Edit">

	</form>

    <?php
            }
        }
    }

	if(isset ($_POST['submit'])){
		$title=$_POST['title'];
		$comment=$_POST['comment'];
		$email=$_POST['email_contact'];
	    $datep= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 echo "email : ".$email_contact;
		 echo "<br>";
		 echo "datep : ".$datep;
		 echo "<br>";
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$picture =base64_encode($binary);

		 	echo $picture;
		 	
		 	$update=mysqli_query($db,"UPDATE newspost SET title='$title',comment='$comment',image='$picture',email_contact='$email_contact' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($db));
		 	}

		 }
		 else{
		 echo "email : ".$email_contact;
         $update=mysqli_query($db,"UPDATE newspost SET title='$title',comment='$comment',email_contact='$email_contact' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo $db->error;
		 	}
		 	}




	
}








	?>


</body>
</html>
