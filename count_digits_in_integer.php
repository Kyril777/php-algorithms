<?php
/* Function that counts number of digits in integers. */
function countDigits($num){
  
  // Treat the parameter as an integer.
  $num = (int)$num;
  $count = 0;

  // Use a while loop to count the number of digits.
  while($num != 0){
    $num = (int)($num / 10);
    $count++;
  }
  return $count;
}

$x = 1000;
echo "$x has ".countDigits($x)." digits"; // 1000 has 4 digits


 /* A simpler code. */
function countDigit($n)
{
    $count = 0;
  
    // Use while loop to count number of integers. Use the int() to acquire the numeric integer equivalent of $n.
    while ($n != 0)
    {
        $n = (int)($n / 10);
        $count++;
    }
    return $count;
}

$x = 75551;
echo "$x has ".countDigit($x)." digits"; // 75551 has 5 digits


/* Uses the log function. */
function countDigitsLog($num){
  return (int)log10(abs($num)) + 1;
}

$x = 10000;
echo "$x has ".countDigitsLog($x)." digits"; // 10000 has 5 digits


?>
