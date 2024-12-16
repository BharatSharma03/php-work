<?php
    $host="localhost";
    $username="root";
    $password=null;
    $conn=new mysqli($host,$username,$password);
    if(!$conn){
        die("error message".mysqli_connect_error());
    }
    else{
        echo "connection successfull";
    }
?>