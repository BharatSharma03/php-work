<?php
    $fname="user";
    $value="bharat";
    setcookie($fname,$value,time()+3600);
    if(isset($_COOKIE[$fname])){
        echo "username is ".$_COOKIE[$fname];
    }else{
        echo"cookie is not set ";
    }
    echo "<br/>";
    setcookie('color','red',time()+3600);
    if(isset($_COOKIE['color'])){
        echo "color is ".$_COOKIE['color'];
    }else{
        echo" cookie  is not set ";
    };
 ?>
