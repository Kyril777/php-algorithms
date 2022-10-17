<?php
// Checks if $num is odd or even
function check($num){
    if($num % 2 == 0){
        echo "An even num"; 
    }
    else{
        echo "An odd num";
    }
}
  
// Recursively check whether the number is even or ddd 
function check($number){
    if($number == 0)
        return 1;
    else if($number == 1)
        return 0;
    else if($number<0)
        return check(-$number);
    else
        return check($number-2);        
}

$number = 17;
if(check($number))
    echo "An even number";
else
    echo "An odd number";
?>
