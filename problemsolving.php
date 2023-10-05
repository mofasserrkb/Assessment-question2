<?php
$arr = array( 1, 2,3,4,5,6,7); 
$finalarray= array();
 $total= count($arr);
 for( $i=$total-1; $i>0;$i--)
  {
    
  
    $finalarray[] = $arr[$i];
   
  
 }
  print_r($finalarray);


?> 