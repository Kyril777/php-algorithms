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

?>


<?php
// Palindrome if there are spaces in the string.
function plaindrome2($string) {
    // Remove spaces
    $string = str_replace(' ', '', $string);

    // Remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    // Lowecase all characters
    $string = strtolower($string);

    // Reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>Palindrome</p>";
    } 
    else {
        echo "</p>Not Palindrome</p>";
    }
}

?>


<?php
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
?>
