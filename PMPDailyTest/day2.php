<?php 

$m=3;
$n=3;
$res = flower($n,$m);
var_dump($res);

function flower($n,$m){
	$num=0;
	for ($i=0; $i <=$n ; $i++) { 
		$num=$n+$m+$n*$m;
	}
	return true;
}



 ?>