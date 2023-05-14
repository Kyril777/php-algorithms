/* Function that swaps the order of two entered parameters. */

<?php
function swap($x, $y) {
  echo "Original Order.\n";
  echo "x = $x \n";
  echo "y = $y \n";

  //Swap technique
  $temp = $x;
  $x = $y;
  $y = $temp;

  echo "Swapped Order.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

swap("Craig", "Daniel");
/* 
Orginal Order.
x = Craig 
y = Daniel 
Swapped Order.
x = Daniel 
y = Craig 

*/
?>
