<?php
function primeChecker($n) {
  for($a=2; $a < $n; $a++) {
    if($n % $a == 0) {
      return 0;
    }
  }
  return 1;
 }

$x = primeChecker();

if ($x == 0) {
  echo "Not a Prime Number.";
} else {
  echo "A Prime Number.";
}
?>

<?php
function check_prime($num){
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 19;
$value = check_prime($num);
if ($value == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number"
?>
