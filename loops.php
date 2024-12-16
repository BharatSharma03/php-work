<?php
    $fruits=array("mango","apple","mosambi");
    foreach($fruits as $fr){
        if($fr=="apple") continue;
        echo $fr ."<br>";
    }
?>