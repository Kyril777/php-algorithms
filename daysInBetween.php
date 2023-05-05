<?php

/* Function that calculates number of days between two dates. */
function daysInBetween($date1, $date2) {
    return date_diff(
        date_create($date2),  
        date_create($date1)
    )->format('%a');
}


print_r(daysInBetween("2021-06-20", "2022-06-22"));
