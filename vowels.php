<?php 
// Counting the vowels inside of a string using substr_count function. 
function vowels($string) {
    return substr_count($string, 'a')+substr_count($string, 'e')+substr_count($string, 'i')+substr_count($string, 'o')+substr_count($string, 'u');
}

print_r(vowels('The quick brown fox jumped over the head of the lazy dog.')); // 16

// A second method.
function count_vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_vowels('Te amo')); // 3

// A third method.
function count_vowels($string){
	$count = 0;
	for($i=0;$i<strlen($string);$i=$i+1){
		if($string[$i]=='a'||$string[$i]=='e'||$string[$i]=='i'||$string[$i]=='o'||$string[$i]=='u'){ 
			$count=$count+1;
		}
	}
	echo "The number of vowels in the string \"$string\" are: ".$count;
}

count_vowels('aeiou'); // The number of vowels in the string "aeiou" are: 5
?>

?>
