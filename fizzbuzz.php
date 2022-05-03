/* Task: print integers 1 to N, but print “Fizz” if an integer is divisible by 3, “Buzz” if an integer is divisible by 5, and “FizzBuzz” if an integer is divisible by both 3 and 5*/ 

<?php
function fizzBuzz($n) {
 $result = array();
  for ($i=1; $i <= $n; $i++) {
   if($i % 5== 0 && $i % 3 ==0 ) {
    $result[] = "FizzBuzz";
   } else if ($i % 3  == 0) {
    $result[] = "Fizz";
   } else if($i % 5 == 0) {
    $result[] = "Buzz";
   } else {
    $result[] = $i . '';
   }
  }
  return $result;
 }
}

?>

<?php
$fizzBuzz2 = array_map(function($digit) {
    if($digit % 15 === 0) return 'FizzBuzz';
    if($digit % 3 === 0) return 'Fizz';
    if($digit % 5 === 0) return 'Buzz';
    return $digit;
}, range(1,10=0));

?>
