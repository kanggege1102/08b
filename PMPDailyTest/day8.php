<?php 

$n = 5;

$m = 10;

$res = LastRemaining_Solution($n,$m);

var_dump($res);

function LastRemaining_Solution($n,$m){

	for ($i=0; $i <= $m; $i++) { 
		$num = $m - 1;
		if ($m == $n) {
			return true;
		}else{
			return false;
		}
	}
	return $num;
}


 ?>