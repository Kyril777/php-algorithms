<?php

/* Splits the array into a smaller size eventually and merge it back together. */

function quickSort($array){
  if (!$length = count($array)) {
  return $array;
 }
 
 $n = $array[0];
 $x = $y = array();
 
 for ($i=1;$i<$length;$i++) {
  if ($array[$i] <=$n) {
   $x[] = $array[$i];
  } else {
   $y[] = $array[$i];
  }
 }
 return array_merge(quickSort($x),array($n),quickSort($y));
}


function quick_sort_2($my_array)
 {
	$loe = $gt = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}

?>
