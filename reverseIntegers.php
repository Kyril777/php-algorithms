<?php 
// Reverse a group of numbers by using strrev().
  
function reverse_int1($int) { 
  
    // Convert integer into string.
    $int = (string) $integers;  
  
    // Reverse order of integer.
    $revString = strrev($int);    
  
    // Convert the string into integer.
    $reverse_int1 = (int) $revString;   
  
    return $reverse_int1;  
}  

echo reverse_int1(47102); 

?>  


<?php

// Reverse a group of numbers with a while loop.
function reverse_int2($int)
{
    $reversal = 0;
    while ($int > 0)
      {
        $reversal = $reversal * 10;
        $reversal = $reversal + $int % 10;
        $int = (int)($n/10);
      }
     return $reversal;
}   

echo reverse_int2(38956);
