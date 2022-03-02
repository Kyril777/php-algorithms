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
