/* Function that splits a name into an array of $first_name and $last_name.*/

<?php
function split_name($fullName) {
    $name = trim($fullName);
    $last_name = (strpos($fullName, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $fullName ) );
    return array($first_name, $last_name);
}
