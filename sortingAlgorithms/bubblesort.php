<?php

function bubbleSort($array)
{
 if (!$length = count($array)) {
  return $array;
 }
 for ($out = 0; $out < $length; $out++) {
  for ($in = 0; $in < $length; $in++) {
   if ($array[$out] < $array[$in]) {
    $temp = $array[$out];
    $array[$out] = $array[$in];
    $array[$in] = $temp;
   }
  }
 }
}



function bubblesort( $array ) {
  $length = count( $array );
  $comparisons  = 0;

  for ( $i = 0; $i < $length; $i++ ) {
    for ( $j = 0; $j < $length - 1; $j++ ) {
      $comparisons++;

      if ( $arr[ $j ] > $array[ $j + 1 ] ) {
        $tmp            = $array[ $j + 1 ];
        $array[ $j + 1 ]  = $array[ $j ];
        $array[ $j ]      = $tmp;
      } 
    }
  } 
 
  echo '<h4>' . $comparisons . ' Comparisons</h4>';
  return $arr;
} 
