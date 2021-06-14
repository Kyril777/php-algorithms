function fizzBuzz($n) {
  $result = array();
	  	for ($i=1; $i <= $n; $i++) {
	  		if($i % 5== 0 && $i % 3 ==0 ){
	  			$result[] = "FizzBuzz";
	  		}else if($i % 3  == 0){
	  			$result[] = "Fizz";
	  		}else if($i % 5 == 0){
	  			$result[] = "Buzz";
	  		}else{
	  			$data[] = $i . '';
	  		}
	  	}
	  	return $result;
    }
}
