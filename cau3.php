<!DOCTYPE html>
<html>
<head>
	<title>câu 3</title>
</head>
<body>
	<?php
	echo "câu a: kiểm tra n có phải số nguyên tố không ? <br>";
	$n = 71;
	function kiemTraSoNguyenTo($n){
		for ($i=2; $i < sqrt($n); $i++) { 
			if ($n % $i == 0) {
				return 0;
			}
			
		}
		return 1;
	}
	if(kiemTraSoNguyenTo($n) == 0)
	{
		echo $n." là số nguyên tố";
	}
	else
	{
		echo $n." không phải là số nguyên tố";
	} 

	echo "<br>câu b: kiểm tra n có phải là số hoàn hảo không ? <br>";
	$s = 0;
	function kiemTraSoHoanHao($n,$s){
		for ($i=1; $i < $n; $i++) { 
			if ($n % $i == 0) {
				$s += $i;
			}
			
		}
		if($s == $n){
			echo $n." là số hoàn hảo";
		}
		else
		{
			echo $n." không là số hoàn hảo";
		}
	}
	kiemTraSoHoanHao($n,$s);
	?>
</body>
</html>