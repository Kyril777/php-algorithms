// Function that splits a name into two arrays: a $first_name and a $last_name.

function split_name($fullName) {
    $name = trim($fullName);
    $last_name = (strpos($fullName, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $fullName ) );
    return array($first_name, $last_name);
}
