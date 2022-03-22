
<?php 
// Dind n'th stair using step size 1 or 2 or 3. 
function numSteps($n) 
{ 
    if ($n == 1 || $n == 0)  
        return 1; 
    else if ($n == 2)  
        return 2; 
      
    else
        return numSteps($n - 3) +  
               numSteps($n - 2) + 
                numSteps($n - 1);  
} 
?> 
