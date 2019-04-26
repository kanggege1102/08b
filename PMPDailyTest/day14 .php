<?php 

$array = array(11,23,1,2,3,4,6,8,9);

$sum = 25;

$res = FindNumbersWithSum($array,$sum);

var_dump($res);

function FindNumbersWithSum($array,$sum){

	$str = sort($array);

	for ($i=0; $i <= $sum; $i++) { 
		
		if ($str == $sum) {
			echo $str[1];
		}

	}
	return $str;

}



 ?>