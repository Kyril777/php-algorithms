<?php
// log() function.
function logarithm($arg, $base){
	echo 'log('.$arg.', '.$base.') = '.log($arg, $base)."\n";	
}

logarithm(81, 3); // 4
logarithm(25, 5); // 2
logarithm(64, 4); // 3

// log10() function. 
function logarithm_ten($arg){
	echo 'log10('.$arg.') = '.log10($arg)."\n";
}

logarithm_ten(10); // 1
logarithm_ten(100); // 2
logarithm_ten(1000); // 3
