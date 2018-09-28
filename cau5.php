<!DOCTYPE html>
<html>
<head>
	<title>Câu 5</title>
</head>
<body>
<?php
$users = array(
        0 => array(
                'id' => 10, 
                'name' => 'Messi',
                'email' => array(
                        'gmail' => '10@gmail.com',
                        'yahoo' => '10@yahoo.com',
                ),
        ),                
        1=> array(
                'id' => 7, 
                'name' => 'Ronaldo',
                'email' => array(
                        'gmail' => '7@gmail.com',
                        'yahoo' => '7@yahoo.com',
                ),
        ),
        2=> array(
                'id' => 4, 
                'name' => 'Ramos',
                'email' => array(
                        'gmail' => '4@gmail.com',
                        'yahoo' => '4@yahoo.com',
                ),
        ),
        3=> array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                        'gmail' => '13@gmail.com',
                        'yahoo' => '13@yahoo.com',
                ),
        ),
        4=> array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                        'gmail' => '11@gmail.com',
                        'yahoo' => '11@yahoo.com',
                ),
        ),

);
?>
<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Email</td>
	</tr>
		<?php for ($i=0; $i < count($users); $i++): ?>
			<tr>

				<td> <?php echo $users[$i]['id']; ?></td>

				<td> <?php echo $users[$i]['name']; ?></td>
			
				<td> <?php echo $users[$i]['email']['gmail']; ?></td>

			</tr>

	<?php endfor; ?>

</table>
	<?php echo "<br>"; ?>
		<form>
			<span class="icon"> <b class="timkiem">Nhập số : </b></span>
			<input type="text" name="Search" placeholder="Nhập số cần tìm..">
			<input type="submit" value="Tìm kiếm" class="Submit">
		</form>

	<?php
	
	if(empty($_GET['Search']))
	{
		echo " <br> Nhập số id cần tìm";
	}
	else
	{
		for ($i=0; $i < count($users); $i++) { 
			if($users[$i]['id'] == $_GET['Search']){  echo "<br>"; ?>
				<table>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Email</td>
					</tr>
					<tr>

						<td> <?php echo $users[$i]['id']; ?></td>
						<td> <?php echo $users[$i]['name']; ?></td>
						<td> <?php echo $users[$i]['email']['gmail']; ?></td>

					</tr>
				</table> <?php
				break;
				
			}
			else{
					if ($i == (count($users)-1)) {
						echo "<br>không tìm thấy";
						
					}
						
				}
		}
	}
	?>

	<?php
	 echo "<br> Sắp xếp ID tăng dần";
	sort($users);?>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
		</tr>
	<?php for ($i=0; $i < count($users) ; $i++): ?>
		
		<tr>

			<td> <?php echo $users[$i]['id']; ?></td>
			<td> <?php echo $users[$i]['name']; ?></td>
			<td> <?php echo $users[$i]['email']['gmail']; ?></td>

		</tr>
	
	<?php endfor; ?>
	</table>
</body>
</html>