<?php
/* PHP function to check for anagrams. */
function anagram($string1, $string2) {

      // Remove all whitespaces including tabs, newlines, etc... Lowecase all characters. Store in new variable.
      $temp1 = strtolower(preg_replace("/\s+/", "", $string1));
      $temp2 = strtolower(preg_replace("/\s+/", "", $string2));
      
      // Counts the instances of characters for each string. If equal, then the string is an anagram.
      if (count_chars($temp1, 1) == count_chars($temp2, 1)) {
            return "The strings '" . $string1 . "' and '" . $string2 . "' are anagrams.";
      } else {
            return "These two strings are not anagrams.";
      }
}

print_r(anagram('dormitory', 'dirty room')); // The strings 'dormitory' and 'dirty room' are anagrams.
print_r(anagram('dessert', 'stressed')); // These two strings are not anagrams.
print_r(anagram('Alec Guinness', 'genuine class')); // The strings 'Alec Guinness' and 'genuine class' are anagrams.
