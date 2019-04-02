<?php 
$array[]=5,3;

$sum = 30;


function FindNumbersWithSum($array,$sum){

	$res = sort($array);

	$info = array_sum($array);

	if ($res==$info) {
		return $res;
	}else{
		$arr = $res*$info;
		return $arr;
	}

	return $arr;

}



 ?>