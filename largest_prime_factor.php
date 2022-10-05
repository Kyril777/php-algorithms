<?php
function LargestPrime($num) {
  $CurrentMaxPrime = -1;

  //If $num is divisible by 2, store $CurentrMaxPrime as 2. Continue dividing $num until not divisible by 2. After each division, update $num as $num/2.
  if($num % 2 == 0) {
    $CurrentMaxPrime = 2;
    while($num % 2 == 0){
      $num = $num/2;
    }
  }
  
  // $num should be odd. With 3 as square root of $num , if divisible, divide and update $num. Update $CurrentMaxPrime
  for($i = 3; $i <= sqrt($num); $i += 2) {
    while($num % $i == 0) {
      $CurrentMaxPrime = $i;
      $num = $num/$i;
    }
  }

  // If  modified $num is greater than 2, update the $CurrentMaxPrime with $num 
  if ($num > 2) 
    $CurrentMaxPrime = $num;

  return $CurrentMaxPrime;
}

?>
