<?php
// Generate numbers in a specific range and check to see if each digit is an odd or even number.
foreach(range(1, 30) as $number){
  
    // Use modulo to check if number is odd or even.
    if(($number % 2) == 0){ 
        echo "$number is even!<br>"; 
    } else{
        echo "$number is odd!<br>";
    }
}
