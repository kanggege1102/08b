<?php 

$x = 4;

$y = 4;

$res = CoubtSteps($x,$y);

var_dump($res);

function CoubtSteps($x,$y){
	for ($i=0; $i < $y; $i++) { 
		for ($j=0; $j < $i; $j++) { 
			$arr[$i]=$arr[$x];
		}
		for ($i=0; $i < $x; $i++) { 
			for ($k=0; $k < =$i; $k++) { 
				$arr[$i]=$arr[x-1]+$arr[$y];
				return $x;
			}
		}
	}
}



 ?>