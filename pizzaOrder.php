<?php
	$pizzaPrices = array( 
						$toppings = array("Plain", "Vegetarian", "Pepperoni", "Hawaiian"),
						$small = array(3.50, 4.35, 7.25, 8.00),
						$medium = array(6.25, 7.60, 10.75, 12.50),
						$large = array(8.00, 12.00, 14.00, 15.50),
					);

    $pizzaMenu = [
                    [3.5, 6.25, 8],
                    [4.35, 7.6, 12],
                    [7.25, 10.75, 14],
                    [8, 12.5, 15.5]
                 ];

    //Examples:
    //medium vegetarian price: $pizzaMenu[1][1];
    //large hawaiian price: $pizzaMenu[3][2];
    //small pepperoni price: $pizzaMenu[2][0];
     
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
			<tr>
				<td>
					<h5><?php 
							foreach ($pizzaPrices as $listElement) {
								echo $listElement; 
							}
						?>
					</h5>
				</td>
				<td>
					<h5>col2</h5>
				</td>
				<td>
					<h5>col3</h5>
				</td>
				<td>
					<h5>col4</h5>
				</td>
				<td>
					<h5>col5</h5>
				</td>
			</tr>
		</table>
	</body>

</html>
