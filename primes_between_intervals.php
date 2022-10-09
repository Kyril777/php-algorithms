/* PHP function that finds all prime numbers in an interval */

<?php
function primenumber($num) {
  $n = 0;
  if ($num == 2 || $num == 3){
    echo $num." ";
  } 
  elseif ($num % 6 == 1 || $num % 6 == 5) {
    for($i = 2; $i*$i <= $num; $i++) {
      if($num % $i == 0){
        $n++;
        break;
      }
    }
    
    if ($n == 0){
      echo $num." ";
    } 
  } 
}

$x = ;
$y = ;
echo "Prime numbers between ".$x." and ".$y." are: \n";
for($i = $x; $i < $y + 1; $i++) {
  primenumber($i);
}
?>


