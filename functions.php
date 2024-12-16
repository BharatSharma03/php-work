<?php
  function myfun($sumarray){
    $sum=0;
    foreach($sumarray as $values){
        $sum+=$values;
        
    }
    return $sum;
  }
  $num=[10,20,10,20];
  $marks=myfun($num);
  echo $marks;
?>