<?php
/* Mean. */
function average_mean($entry)
{
   if (!is_array($entry)) return false;

   return array_sum($entry)/count($entry);


/* Median */




/* Mode */
function average_mode($arr) {
  $count = array();
  foreach ((array)$arr as $val) {
    if (!isset($count[$val])) { $count[$val] = 0; }
    $count[$val]++;
  }
  arsort($count);
  return key($count);
}
