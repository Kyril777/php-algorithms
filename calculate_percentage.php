<?php
/* Function to calculate percentages/ */ 
function calcPercentage($value, $totalValue) {
  // Divide value from total value.
  $count1 = $value / $totalValue;
  
  // Multiply by 100.
  $count2 = $count1 * 100;
  
  // Format number percentage by integer and 2 decimal places.
  $count = number_format($count2, 2);
  return $count;
}

print_r(calcPercentage(66.229,100)); // 66.23
