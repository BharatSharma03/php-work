<?php
    $host="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($host,$username,$password);
  
    if($conn->connect_error){
        die("error message".$conn->connect_error);
    }
    else{
        echo "connection successfull";

    }
    echo "<br>";
    $sql="CREATE DATABASE demo_2";
    if($conn->query($sql)==TRUE){
        echo"database created successfully";
        
    }else{
        echo "error message".$conn->error;
    }
    $conn->close();
?>
    
