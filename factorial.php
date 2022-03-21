<?php
function factorial($input){ 
  
// If input is less than or equal to 1, then return 1.
  if($input <=1) {
    return 1;
  }

  // If greater than 1, then make a recursive call and search for the factorial. 
  return $input * factorial($input-1); 
}

if(!empty($_POST['number'])){

$input = $_POST['number'];

// Echo the output.
echo '<br>'. 'The number '.$input.' has a factorial of ' . factorial($input);
}
?>



<?php
function factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;
}
?>
