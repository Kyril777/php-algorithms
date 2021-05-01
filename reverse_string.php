function reverse_string($string){

  // store the variable
  $reversed = '';
    
  // count the length
  $i = 0; //counting length
    
  // calculate the string length
  while(isset($string[$i])){
      $i++;
  }
    
  // accessing the element from the string and assign the result to $reversed 
  for($j = $i - 1; $j >= 0; $j--){
      $reversed .= $string[$j];
  }    
    
  // returnin the reversed string
    return $reversed;
}
