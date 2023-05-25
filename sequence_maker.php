<?php
/* Function that uses array dereferencing to return key values. */
function data()
{
    $retn_key["a"] = 123;
    $retn_key["b"] = 456;
    $retn_key["c"] = 789;
    $retn_key["d"] = 987;
    $retn_key["e"] = 654;
    $retn_key["f"] = 321;

    return $retn_key;
}

$a = data()["a"];
$b = data()["b"];
$c = data()["c"];
$d = data()["d"];
$e = data()["e"];
$f = data()["f"];

echo $d . $c . $c . $e . PHP_EOL; // 987789789654
echo $b . $f . $a . $a . PHP_EOL; // 456321123123
echo $f . $d . $f . $e . PHP_EOL; // 321987321654

?>
