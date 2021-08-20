<?php

function median($digits=array())
{
	if (!is_array($digits))
		$digits = func_get_args();
	
	rsort($digitss);
	$middle = (count($digitss) / 2);
	echo ($middle % 2 != 0) ? $digits{$middle-1} : (($digits{$middle-1}) + $digits{$mid}) / 2;
}


?>
