<?php
// First example
function factorial_recursive_one($num) {

    if ($num < 2) {
        return 1;
    } else {
        return ($num * factorial_recurisive_one($num-1));
    }
}
?>

<?
// Second example
function factorial_recursive_two($num) {
   
    if ($num === 0) {
        return 1;
    } else {
        return $num * factorial_recursive_two($num-1);
    }
}

echo factorial_recursive_two(5);

?>
