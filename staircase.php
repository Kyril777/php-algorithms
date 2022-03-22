// 

<?php
function staircase($steps)
{
if ($steps <= 1)
	return $steps;
return staircase($steps - 1) +
	staircase($steps - 2);
}

// Returns number of ways to reach n'th stair
function countWays($steps)
{
    return staircase($steps + 1);
}
?>
