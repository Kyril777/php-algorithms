<?php
function primenumber($num) {
  $n = 0;

  for($i = 2; $i < ($num/2+1); $i++) {
    if($num % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $num." is a prime number.";
  } else {
    echo $num." is not a prime number.";
  }
}

?>
