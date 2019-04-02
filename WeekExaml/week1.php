<?php 
$max = 100;
function ls($max){
	$num = 0;
	for ($i=0; $i <= $max; $i++) { 
		$num+=$i;
	}
	return $num;
}
$res = ls($max);
var_dump($res);
function ls1($max){
	do{
		$num=0;
		$num+=$i;
		$i++;
	}while($num+=$i);
	return $num;
}
function n($max){
	$n=0;
	for ($i=0; $i <=$max ; $i++) { 
		$n+=$i;
	}
	return $n;
}
function aa(){
	$res = "abcd";
	$data= strlen($res);
	for ($i=0; $i <=$res ; $i++) { 
		for ($k=0; $k <=$res ; $k++) { 
			for ($l=0; $l <=$res ; $l++) { 
				for ($n=0; $n <=$res ; $n++) { 
					$i+=$k+=$l+=$n+=$res;
				}
			}
		}
	}
	return $res;
}

class person{
	public function age();
	public function name();
}

class walk{
	public function xz();
}

class student (preson,walk){

}

 ?>