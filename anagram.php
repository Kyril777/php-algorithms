 function anagram($string1, $string2) {
      if (count_chars($string1, 1) == count_chars($string2, 1)) {
           return "This '" . $string1 . "', '" . $string2 . "' are anagrams.";
      }
      else {
          return "This two strings are not anagrams.";
      }

  }
    echo anagram('dormitory', 'dirty room');
