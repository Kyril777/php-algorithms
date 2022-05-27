<?php
function encrypt($message, $s)
{
    $result = "";
 
    // Go through the text.
    for ($i = 0; $i < strlen($message); $i++)
    {
        // Transform each character.
        if (ctype_upper($message[$i]))
            $result = $result.chr((ord($message[$i]) +
                               $s - 65) % 26 + 65);
 
    // Encrypt lowecase letters letters
    else
        $result = $result.chr((ord($message[$i]) +
                           $s - 97) % 26 + 97);
    }
 
    // Return the resulting string
    return $result;
}

$message = "SECRETLOVERS";
$s = 4;
echo encrypt($message, $s);
?>
