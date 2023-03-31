<?php
function palindrome_maker($entry) {
    return $word.strrev($entry);
}

$salad_palindrome = palindrome_maker('salad');

echo $salad_palindrome; // returns 'dalas'
?>
