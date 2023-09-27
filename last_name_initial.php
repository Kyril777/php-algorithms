<?php
// Function that outputs the first letter of an entered last name.
function last_name_initial($lastname) {
    $first_letter = substr($lastname, 0, 1);
    return $first_letter;
}

echo last_name_initial("Adnar"); // Output: A
echo last_name_initial("Simpson"); // Output: S
echo last_name_initial("Neal"); // Output: N
echo last_name_initial("Knight"); // Output: K
