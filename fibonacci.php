<?php

function fibonacci1($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo "Fibonacci Series \n";
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}
  
?>

<?php
function fibonacci2($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci2($n - 1) + fibonacci2($n - 2);
    }
}
