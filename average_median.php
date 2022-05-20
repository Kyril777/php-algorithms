<?php

function median1($digits=array())
{
	if (!is_array($digits))
		$digits = func_get_args();
	
	rsort($digitss);
	$middle = (count($digits) / 2);
	echo ($middle % 2 != 0) ? $digits{$middle-1} : (($digits{$middle-1}) + $digits{$mid}) / 2;
}


function median2($a) { 
    sort($a);
    $c = count($a);
    $m = floor(($c-1)/2);
    return ($c % 2) ? $a[$m] : (($a[$m]+$a[$m+1])/2);
}

?>
