/* Armstrong number's value is equal to the sum of the cubes of its digits. */

<?php  
$num=;  
$total=0;  
$x=$num;  
while($x!=0)  
  {  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
  }

if($num==$total)  
  {  
    echo "Yes it is an Armstrong number";  
  }  
else  
  {  
    echo "No it is not an armstrong number";  
  }  
?>  


<?php
function arm_strong_num($num, $order) {
  $y = $num;
  $sum = 0;

  while ($y > 0){
    $x = $y % 10;
    $sum = $sum + Pow($x, $order);
    $y = (int)($y/10);
  }

  if ($num == $sum){
    echo $num." is a Armstrong Number.\n";
  } else {
    echo $num." is not a Armstrong Number.\n";
  }
}

?>
