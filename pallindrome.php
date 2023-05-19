<?php
/* Function to check if entry is a palindrome. */
function isPalindrome($entry){ 
	
	// Reverses string. If the reverse is true, then it is a palindrome.
	if (strrev($entry) == $entry) { 
		return 1;
	} else {
		return 0;
	}
} 
 
// Test for false.
$shark = "shark";
if(isPalindrome($shark)) { 
	echo "Yes, it is a palindrome."; 
} else { 
	echo "No, not a palindrome."; 
}
// No, it's not a palindrome.

// Test for true.
$civic = "civic";
if(isPalindrome($civic)){ 
	echo "Yes, it is a palindrome."; 
} else { 
	echo "No, not a palindrome."; 
}
// Yes, it's a palindrome.

// Palindrome if there are spaces in the string.
function plaindromeTest($string) {
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

plaindromeTest('no madam on'); // Palindrome

// Palindrome for integers.
function palindromeIntegerTester($input) {
    $reverse = strrev($input);
        if($reverse == $input) {
            echo 'Palindrome';
        }
        else
        {
            echo 'Not palindrome';
        }
} 

palindromeIntegerTester(123321); // Palindrome
palindromeIntegerTester(12345); // Not palindrome
