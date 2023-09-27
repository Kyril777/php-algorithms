<?php
// Function that outputs the first letter of an entered last name.
function last_name_initial($lastname) {
    $first_letter = substr($lastname, 0, 1);
    return $first_letter;
}

echo last_name_initial("Adnar"); // Output: A
echo last_name_initial("Simpson"); // Output: S
echo last_name_initial("Neal"); // Output: N
echo last_name_initial("Knight"); // Output: K


// Function that divides names into two companies per their last name initial.
function last_name_initial($lastname) {
    $first_letter = substr($lastname, 0, 1);
    $pattern1 = '/^[A-Ma-m]+$/';
    $pattern2 = '/^[K-Zk-z]+$/';
    if(preg_match($pattern1, $first_letter) == true) {
    	return "Person belongs in the first batch.";
    } elseif (preg_match($pattern2, $first_letter) == true) {
    	return "Person belongs in the second batch.";
    	
    }
}

echo last_name_initial("Adnar"); // Output: Person belongs in the first batch.
echo last_name_initial("Simpson"); // Output: Person belongs in the second batch.
echo last_name_initial("Neal"); // Output: Person belongs in the second batch.
echo last_name_initial("Knight"); // Output: Person belongs in the first batch.
