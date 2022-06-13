<?php
// Find three numbers where the sum of two makes the third element inside of the array.

function find_triplet($array, $n)
{
	// Sort array.
	sort($array);

	// Check to see if pair exists in array that has sum equal to an array element.
	for ($i = $n - 1; $i >= 0; $i--)
	{
		$j = 0;
		$k = $i - 1;
		while ($j < $k)
		{
			if ($array[$i] == $array[$j] + $array[$k])
			{				
				// If pair is found.
				echo "The elements are ", $array[$i], " ", $array[$j], " ", $array[$k];
				return;
			}
			else if ($array[$i] > $array[$j] + $array[$k])
				$j += 1;
			else
				$k -= 1;
		}
	}

	// Otherwise, if pair is not found.
	echo "No such triplet exists";
}
