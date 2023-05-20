<?php
/* Create a function that has deafult values as parameters that are amendable when called. */
function make_pizza($types = array("plain"), $pizzaCrust = NULL)
{
	// Update the default values if user enters differently in the parameters.
    $crust = is_null($pizzaCrust) ? "thin" : $pizzaCrust;
    return "Make ".join(", ", $types)." pizza in $crust crust.\n";
}
echo make_pizza(); // Make plain pizza in thin crust.
echo make_pizza(array("pepperoni", "mushroom"), "deep dish"); // Make pepperoni, mushroom pizza in deep dish crust.
