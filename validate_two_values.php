<?php
/* PHP function that validates two values and accepts functions as a parameter. */
function firstValue($value) {
    echo "Validating first value..." .PHP_EOL;
    if ($value == 5481) {
        return true;
    } else {
        return false;
    }
}

function secondValue($value) {
    echo "Validating second value..." .PHP_EOL;
    if ($value == 6677) {
        return true;
    } else {
        return false;
    }
}

function validate($values, $functions) {
    for ($i = 0; $i < count($values); $i++) {
        if ($functions[$i]($values[$i])) {
            echo "$values[$i] passes validation." .PHP_EOL;
        } else {
            echo "$values[$i] fails validation." .PHP_EOL;
        }
    }
}

$values = [5481, 9999];
$functions = ['firstValue', 'secondValue'];
validate($values, $functions);
/*
Validating first value...
5481 passes validation.
Validating second value...
9999 fails validation.
*/
