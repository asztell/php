<?php
	$pizzaPrices = array( 
						array("", "small", "medium", "large"),
						array("Plain", 3.50, 6.25, 8.00),
						array("Vegetarian", 4.35, 7.60, 12.00),
						array("Pepperoni", 7.25, 10.75, 14.00),
						array("Hawaiian", 8.00, 12.50, 15.50)
					);
?>
<!DOCTYPE html>
<html>
	<head><title></title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<h3>MENU</h3>
		<table width="200" cellpadding="1" cellspacing="1" border="1">
<!--			<thead>
				<tr>
					<td></td>
						
				</tr>
			</thead>-->
			<tbody>
			<?php
				foreach ($pizzaPrices as $row) {
					echo "<tr>";
					foreach ($row as $pizzaType) {
						echo "<td>$pizzaType</td>";
					}
					echo "</tr>";
				}
			?>
		</table><br/>
		<form action="pizzaOrder.php" method="post">
		<h5>place your order: </h5>
		Topping: 
							<select name="toppingSelected">
								<?php
									for ( $i = 1; $i <= 4; $i++) {
										echo '<option value="'.$pizzaPrices[$i][0].'">'.$pizzaPrices[$i][0].'</option>';
									}
								?>
							</select>

		Size: 
							<select name="sizeSelected">
								<?php
									for ( $i = 1; $i <= 3; $i++) {
										echo '<option value="'.$pizzaPrices[0][$i].'">'.$pizzaPrices[0][$i].'</option>';
									}
								?>
							</select><br/><br/>
			<input type="submit" value="submit order" name="submitOrder"/>
			<?php
				if ($_POST['submitOrder']) {
					
				} 
			?>

		</form>

	</body>

</html>




