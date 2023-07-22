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
            produceValues($a);
        } else{
            $items[] = $a;
            $count++;
        }
    }
    // Return the array's total count and values.
    return array('total' => $count, 'values' => $items);    
}
 


// Nested array
$mathematics = array(
    "foundations" => array(
        "logic",
        "algebra",
        "set theory"
    ),
    "pure mathematics" => array(
        "algebra",
        "number theory",
        "geometry",
	 	"arithmetic",
	 	"topology",
	 	"combinatorics",
	 	"mathematical analysis"
    ),
    "applied mathematics" => array(
        "snake" => array(
            "statistics and probability",
            "set theory",
            "trigonometry",
		 	"calculus"
        )
    )
);
 
// Count and print values in nested array
$result = produceValues($mathematics);
echo $result['total'] . ' value(s) found: ' .PHP_EOL;
echo implode(', ', $result['values']) .PHP_EOL;

/*
14 value(s) found: logic, algebra, set theory, algebra, number theory, geometry, arithmetic, topology, combinatorics, mathematical analysis, statistics and probability, set theory, trigonometry, calculus
*/
 
