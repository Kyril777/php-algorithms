<?php

function Palindrome_String($entry){ 
    if (strrev($entry) == $entry){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Test
$shark = "shark";
if(isPalindrome($shark)){ 
    echo "Yes, it is a palindrome."; 
}
  else { 
echo "No, not a palindrome."; 
  }




// Palindrome for integers.
function Palindrome_Integers($input) {
    $reverse = strrev($input);
        if($reverse == $input) {
            return true;
        }
        else
        {
            return false;
        }
}       
