<?php
// A function that produces values via recursion.
function produceValues($array) {
    global $count;
    global $items;
    
    // Check input is an array
    if(!is_array($array)){
        die("ERROR: Input not cointained in the array.");
    }

    foreach($array as $a){
        if(is_array($a)){
            printValues($a);
        } else{
            $items[] = $a;
            $count++;
        }
    }
    // Return the array's total count and values.
    return array('total' => $count, 'values' => $items);    
}
 
