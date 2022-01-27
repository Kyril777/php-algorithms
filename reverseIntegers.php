<?php 
// Reverse a group of numbers
  
function reverseInt($int) {  
    $int = (string) $integers;  
    $revString = strrev($int);    
    $reverseInt = (int) $revString;   
    return $reverseInt;  
}  

echo reverseInt(47102); 

?>  
