<?php
if(isset($_REQUEST["fname"])){
    echo "Username :".$_POST['fname'];
    echo "<br/>";
    echo "Password :".$_POST['password'];
    echo "<br/>";

    echo "Bio :". $_POST['comment'];
    echo "<br/>";
    echo "language :". implode(" ,",$_POST['skills']);
    echo "<br/>";
    echo "Gender :". $_POST['gender'];
    echo "<br/>";
    echo "City :". $_POST['city'];
    echo "<br/>";

}
?>
