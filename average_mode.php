<?php
function average_mode($arrayInput){ 
  if(is_array($arrayInput)){ 
 
   // Search for frequency of multiple values.
    $arrayFreq = [];
    foreach( $arrayInput as $v ){
      if (!isset($arrayFreq[$v])){
        $arrayFreq[$v] = 0;
      }
      $arrayFreq[$v]++;
    }
 
    // Return empty array if there is no mode.
    if( count($arrayInput) == count($arrayFreq) ){
      return []; 
    }
 
  // Produce modes.
  $arrayMode = array_keys($arrayFreq, max($arrayFreq));
  return $arrayMode; 
  }     
} 
 
$array = array(55,21,39,88,55,90,62,13,74,55,19); 
echo 'Mode: '; 
print_r (average_mode($array));
 
?>
