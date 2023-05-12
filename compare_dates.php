<?php
/* Function that compares two dates if earlier or later. */
function compare_date($date1, $date2){
  // Convert date format to timestamp format.
  $dateTimestamp1 = strtotime($date1);
  $dateTimestamp2 = strtotime($date2);
  
  // Compare the timestamp date 
  if ($dateTimestamp1 > $dateTimestamp2)
    echo "$date1 is later than $date2";
  else
    echo "$date1 is earlier than $date2";
}

print_r (compare_date("2019-01-24","2010-09-06")); // 2019-01-24 is later than 2010-09-06
print_r (compare_date("01-02-2005","09-06-1997")); // 01-02-2005 is earlier than 09-06-2007
print_r (compare_date("2020-04-14","07-04-2018")); // 2020-04-14 is later than 07-04-2018
