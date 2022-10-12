<?php

// Function that counts number of digits in integers
function countDigits($num){
  $num = (int)$num;
  $count = 0;

  while($num != 0){
    $num = (int)($num / 10);
    $count++;
  }
  return $count;
}

$x = ;

echo "$x gas: ".countDigits($x)." digits";

?>
