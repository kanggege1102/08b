<?php 

$num1 = 5;

$num2 = 5;

$res = Add($num1,$num2);

var_dump($res);

function Add($num1,$num2){

$str = array($num1,$num2);

$num = array_sum($str);

return $num;


}


 ?>