<?php
        
        include_once'connection.php';
        $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 

    if($db->connect_error){
        die("connection failed:".$db);
    }
    
    else{
      echo "connection ok";
    }          


    if(isset($_POST['publish']))

    {


    	$title =$_POST['title'];
        $comment =$_POST['cmt'];
        $imagepath=$_FILES['image']['tmp_name'];
        $email_contact=$_POST['email_weblink'];

        if(!empty($imagepath)){
            $img_binary=fread(fopen($imagepath,"r"),filesize($imagepath));
            $picture=base64_encode($img_binary);
      
        $query ="INSERT INTO newspost(title,comment,img,email_contact) VALUES('$title','$comment','$picture','$email_contact')";

        mysqli_query($db,$query);
  
        header('Location:index.php');//rediect to index page after insertion
        }
    }
?>