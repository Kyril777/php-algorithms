<?php
function checkleapyear($year) {
  if ($year % 400 == 0) {
     echo $year." is a leap year.";
  } elseif ($year % 100 == 0) {
     echo $year." is not a leap year.";
  } elseif ($year % 4 == 0) {
     echo $year." is a leap year.";
  } else {
     echo $year." is not a leap year.";
  }
}

/* Cleaner version. */
function checkleapyear($year) { 
  if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400)) {
    echo "$year is a Leap Year.";    
  } else {  
    echo "$year is not a Leap Year.";
  }
}

checkleapyear(2021);
