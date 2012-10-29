<?php
	$pizzaPrices = array( 
						array("Plain", "Vegetarian", "Pepperoni", "Hawaiian"),
						array(3.50, 4.35, 7.25, 8.00),
						array(6.25, 7.60, 10.75, 12.50),
						array(8.00, 12.00, 14.00, 15.50)
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
			<thead>
				<tr>
					<td></td>
						<th>Small</th>
						<th>Medium</th>
						<th>Large</th>
				</tr>
			</thead>
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
							<select>
								<?php
									for ( $i = 0; $i <= 3; $i++) {
										echo '<option value="'.$pizzaPrices[0][$i].'">'.$pizzaPrices[0][$i].'</option>';
									}
								?>
							</select>



		</form>

	</body>

</html>




