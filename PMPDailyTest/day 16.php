<?php 

$target = 7;

$array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];

$res = Find($target,$array);

var_dump($res);

function Find($target,$array){

	for ($i=0; $i <=$target ; $i++) { 
		
		if ($array[$i]==$target) {
			
			return true;

		}

	}

}



 ?>