<!DOCTYPE html>
<html>
<head>
	<title>Cau 1</title>
</head>
<body>

<?php echo "cau 1 <br>"; ?>
	<form>
		<span class="icon"> <b class="timkiem">Nhập số : </b></span>
		<input type="text" name="Search" placeholder="Nhập số cần tìm..">
		<input type="submit" value="Tìm kiếm" class="Submit">
	</form>
	
	<?php $number = array(1,2,3,4,5,6,7,8,9);
	if(empty($_GET['Search']))
			{
				echo " <br> Nhập số id cần tìm";
			}
		else
			{
				for ($i=0; $i < count($number); $i++) { 
					if($number[$i] == $_GET['Search']){  
						echo "<br>Tim thay <br>"; 
						break;
						
					}
					else{
							if ($i == (count($number)-1)) {
								echo "<br>không tìm thấy";
								
							}
								
						}
				}
	}
	?>
</body>
</html>