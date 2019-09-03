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


    if(isset($_POST['submit']))

    {


    	$username =$_POST['usrnm'];
        $password =$_POST['psw'];
      
    
      
    	
      $query ="INSERT INTO susmit_usr  (username,pass ) VALUES('$username','$password')";

        mysqli_query($db,$query);
  
        header('Location:home2.php');//rediect to index page after insertion



    }

    
     

?>