<?php

function isPalindrome($entry){ 
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
?> 
