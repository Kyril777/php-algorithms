<?php 
// Counting the vowels inside of a string using substr_count function. 
function vowels($string) {
    return substr_count($string, 'a')+substr_count($string, 'e')+substr_count($string, 'i')+substr_count($string, 'o')+substr_count($string, 'u');
}

print_r(vowels('The quick brown fox jumped over the head of the lazy dog.')); // 16


function count_vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_vowels('Te amo')); // 3

?>
