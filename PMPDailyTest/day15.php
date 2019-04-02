<?php 

$info = "hello word asdadsadasd";

var_dump(FirstNotRepeating($info));

function FirstNotRepeating($info){

	$arr = [];

	for ($i=0; $i < strlen($str); $i<$len,$i++) { 

		if (isset($arr[$str[$i]])) {

			$arr[$str[$i]]++;

		}else{

			$arr[$str[$i]]=-1;

		}
	}
	foreach ($arr as $key => $value) {

		if ($value == 1) {

			return $key;

		}
	}
}



 ?>