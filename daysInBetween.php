<?php
/* Function that calculates number of days between two dates. */
function daysInBetween($date1, $date2) {
    return date_diff(
        date_create($date2),  
        date_create($date1)
    )->format('%a');
}

print_r(daysInBetween("2022-06-20", "2021-06-22")); // 363

?>

<?php
/* Another approach using strtotime(). */
function daysInBetween($date1, $date2){ 
    $difference = strtotime($date2) - strtotime($date1); 
    return abs(round($difference / 86400)); 
} 

// Sample dates.
$date1 = "08-08-2021";        
$date2 = "02-02-2021";    

print_r(daysInBetween($date1, $date2)); // 187
