<?php
function selectionsort(&$array, $n) {
  for($i=0; $i<$n; $i++) {
    $min_idx = $i;

    for($j=$i+1; $j<$n; $j++) {
      if($array[$j] < $array[$min_idx])
      {$min_idx = $j;}
    }

    $temp = $Array[$min_idx];
    $array[$min_idx] = $array[$i];
    $array[$i] = $temp;
  }
}

// Print array
function printarray($array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $array[$i]." ";
  echo "\n"; 
}  
