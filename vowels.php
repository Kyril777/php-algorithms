<?php 
// Counting the vowels inside of a string using sybstr_count function. 

function vowels($string) {
    return substr_count($string, 'a')+substr_count($string, 'e')+substr_count($string, 'i')+substr_count($string, 'o')+substr_count($string, 'u');
}


// Another function but using preg_match_all function.
function count_vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_vowels('Te amo'));

?>
