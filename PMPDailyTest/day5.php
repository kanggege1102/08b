<?php 

$n = array(1,2,3,4,5,6,7,8);

$res = js($n);
echo($res);

function js($n)
{
	$num = shuffle($n);
	return $num;
}


 ?>