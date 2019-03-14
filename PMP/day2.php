<?php
header("content-type:text/html;charset=utf8");


for ($i=100; $i <1000 ; $i++) { 
	# code...调用方法
	$res = lj($i);
	if(isset($res))
	{
		var_dump($res);
	}
	
}
//定义一个方法
	function lj($str)
	{
		$res = '';
		$g = $str%10;
		$s = $str/10%10;
		$b = $str/100%10;
		$res = $b*$b*$b+$s*$s*$s+$g*$g*$g;

		if($res == $str)
		{
			return $res;
		}else
		{
			// return '不是';
		}
		//返回成功结果
		// return $b.','.$s.','.$g;
	}
?>