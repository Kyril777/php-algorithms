<?php
/* Find the mean average. */
function averageMean($entry){ 
   if(is_array($entry)){ 
      $mean = array_sum($entry)  / count($entry);  
      return $mean; 
      }     
   }
 
$array = array(95, 90, 88, 83, 82, 82, 80, 77, 76, 76, 73); 
 
echo 'Mean: '.averageMean($array); // 82

