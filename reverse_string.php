<?php
function reverse_string($string){

  // Store the variable
  $reversed = '';
    
  // Count the length
  $i = 0; //counting length
    
  // Calculate the string length
  while(isset($string[$i])){
      $i++;
  }
    
  // accessing the element from the string and assign the result to $reversed 
  for($j = $i - 1; $j >= 0; $j--){
      $reversed .= $string[$j];
  }    
    
  // return in the reversed string
    return $reversed;
}

?>


<?php
function reverse_string($string) {
  $l = 0;
  $r = strlen($string) - 1;

  while($r > $l){
    // Swap characters at indices l and r
    $c = $string[$l];
    $string[$l] = $string[$r];
    $string[$r] = $c;
    
    $l++;
    $r--;
  }
  echo "$string \n";
}
