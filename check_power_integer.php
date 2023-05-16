/* Function that checks if one integer is the power of another integer. */
<?php
function check_power_integer($x, $y){
  // Assign variables for the parameters.
  $a = $x;
  $b = $y;
  
  // Run a while loop as long as the mod of $x is $y.
  // Continue to run while loop as until $x equals $y, when $x is equal to 1.
  while ($x % $y == 0) {
    $x = $x / $y;
  }
  
  // If $x == 1, then the original value of $x is divisible by $y.
  if($x == 1){
    return "$a is power of $b";
  } else {
    return "$a is not power of $b";
  }
}

print_r(check_power_integer(8,2)."\n"); // 8 is power of 2
print_r(check_power_integer(27,3)."\n"); // 27 is power of 3
print_r(check_power_integer(90,3)."\n"); // 90 is not power of 3
?>


