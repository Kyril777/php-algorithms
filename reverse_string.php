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
