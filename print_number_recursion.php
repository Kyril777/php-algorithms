<?php
  function print_number($digit) {
    if($digit<8){
      echo "The number is $digit <br/>";
    print_number($digit+1);
   }
  }
  print_number(1);
?>
