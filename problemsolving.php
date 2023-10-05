<?php
$arr = array(1, 2, 3,4,5,6,7); 
 
 $total= count($arr);
 for( $i=$total; $i>0;$i--)
 {
    
    $finalarray=array();
    array_push($finalarray,$i);
    print_r($finalarray);
  
 }

?>