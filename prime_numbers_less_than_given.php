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
echo "Prime numbers less than ".$x." are: \n";
for($i = 2; $i < $x + 1; $i++) {
  primenumber($i);
}
?>
