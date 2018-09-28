<!DOCTYPE html>
<html>
<head>
	<title>Câu 2</title>
</head>
<body>
	<?php
	echo "Sắp xếp mảng giảm dần <br>";
		$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
		rsort($number);
		for ($i=0; $i < count($number); $i++) { 
					echo $number[$i];
				}		
	?>
</body>
</html>