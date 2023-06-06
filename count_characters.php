<?php
/* Function that uses the foreach loop to count characters in a string. */
function count_characters($data){
	foreach (count_chars($data, 1) as $i => $val) {
		echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
	}
}

$string = "Two Cars in Every Garage and Three Eyes on Every Fish...";
count_characters($string);

/* 
There were 10 instance(s) of " " in the string.
There were 3 instance(s) of "." in the string.
There were 1 instance(s) of "C" in the string.
There were 3 instance(s) of "E" in the string.
There were 1 instance(s) of "F" in the string.
There were 1 instance(s) of "G" in the string.
There were 2 instance(s) of "T" in the string.
There were 4 instance(s) of "a" in the string.
There were 1 instance(s) of "d" in the string.
There were 6 instance(s) of "e" in the string.
There were 1 instance(s) of "g" in the string.
There were 2 instance(s) of "h" in the string.
There were 2 instance(s) of "i" in the string.
There were 3 instance(s) of "n" in the string.
There were 2 instance(s) of "o" in the string.
There were 5 instance(s) of "r" in the string.
There were 3 instance(s) of "s" in the string.
There were 2 instance(s) of "v" in the string.
There were 1 instance(s) of "w" in the string.
There were 3 instance(s) of "y" in the string.

*/
