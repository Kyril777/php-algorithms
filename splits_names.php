/* Function that uses RegEx to split a name into an array of $first_name and $last_name.*/

<?php
function split_name($fullName) {
    $name = trim($fullName);
    $last_name = (strpos($fullName, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $fullName ) );
    return array($first_name, $last_name);
}

/*
split_name('Melvin Dougherty') will output:

array(
    0 => 'Melvin',
    1 => 'Dougherty'
);

*/

function split_name($fullName) {
    $arr = explode(' ', $fullName);
    $num = count($arr);
    $firstName = $middleName = $lastName = null;
    
    if ($num == 2) {
        list($firstName, $lastName) = $arr;
    } else {
        list($firstName, $middleName, $lastName) = $arr;
    }

    return (empty($firstName) || $num > 3) ? false : compact(
        'firstName', 'middleName', 'lastName'
    );
}

/*
var_dump(split_name('Sarah Michelle Gellar')) will output:

Array
(
    [firstName] => Sarah
    [middleName] => Michelle
    [lastName] => Gellar
)
