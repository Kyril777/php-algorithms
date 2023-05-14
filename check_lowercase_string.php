<?php
/* Functon to check if string is all lowecase. */
function string_lowercase($string){
  for ($i = 0; $i < strlen($string); $i++){
    if (ord($string[$i]) >= ord('A') && ord($string[$i]) <= ord('Z')) {
      return 'Not all lowercase.';
    }
  }
  return 'All lowercase.';
}
print_r(string_lowercase('case closed')); // All lowercase.
print_r(string_lowercase('Case Dismissed')); // Not all lowercase.
print_r(string_lowercase('mOtion to aDJourn')); // Not all lowercase.
