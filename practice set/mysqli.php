<?php
$host="localhost";
$username="root";
$password=null;
$database="demo";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die ("some error". $conn->connect_error);
}
echo "connection success"; 
?>