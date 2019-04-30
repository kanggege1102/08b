<?php 

$n = 10;

$res = NumberOf1($n);

var_dump($res);

function NumberOf1($n){

	for ($i=0; $i <=$n ; $i++) { 

		$num = $n%2;

		if ($num != 1) {
			for ($i=0; $i <=$n ; $i++) { 

			$num = $n%2;
			}
		}else{
			return $num;
		}
	}

}




 ?>