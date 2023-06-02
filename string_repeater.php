<?php
/* PHP function that repeats a string based on a multiplier.  */
function string_repeater($input, $multiplier){
	$separator = ', ';
	return implode($separator, array_fill(0, $multiplier, $input));	
}

$result = string_repeater('marsha', 3);
print_r($result); // marsha, marsha, marsha
