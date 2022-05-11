<?php

/* Splits the array into a smaller size eventually and merge it back together. */

function quickSort($array){
  if (!$length = count($array)) {
  return $array;
 }
 
 $n = $array[0];
 $x = $y = array();
 
 for ($i=1;$i<$length;$i++) {
  if ($array[$i] <=$n) {
   $x[] = $array[$i];
  } else {
   $y[] = $array[$i];
  }
 }
 return array_merge(quickSort($x),array($n),quickSort($y));
}
