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
