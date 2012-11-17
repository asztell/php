<?php
	class Car {
		public	$owner;
		public	$color;
		public	$year;
		public	$make;
		public	$model;
		
		public	function setOwner($newOwner) {
			$this->owner = $newOwner;
		}
		public	function setColor($newColor) {
			$this->color = $newColor;
		}
		public	function setYear($newYear) {
			$this->year = $newYear;
		}
		public	function setMake($newMake) {
			$this->make = $newMake;
		}
		public	function setModel($newModel) {
			$this->model = $newModel;
		}
		public	function outputData($car) {
			echo "
				<table>
					<tr>
						<td>Owner: </td>
						<td><strong>".$car->owner."</strong></td>
					</tr>
					<tr>
						<td>Color: </td>
						<td><strong>".$car->color."</strong></td>
					</tr>
					<tr>
						<td>Year: </td>
						<td><strong>".$car->year."</strong></td>
					</tr>
					<tr>
						<td>Make: </td>
						<td><strong>".$car->make."</strong></td>
					</tr>
					<tr>
						<td>Model: </td>
						<td><strong>".$car->model."</strong></td>
					</tr><br/>
				</table>
			";
		}
	}

	$car1 = new Car();
	$car1->setOwner('Jeannie');
	$car1->setColor('absolute red');
	$car1->setYear('2007');
	$car1->setMake('Toyota');
	$car1->setModel('Solara');
	$car1->outputData($car1);

	$car2 = new Car();
	$car2->setOwner('Bill');
	$car2->setColor('burnt orange');
	$car2->setYear('1966');
	$car2->setMake('Chevrolet');
	$car2->setModel('Corvette');
	$car2->outputData($car2);

	$car3 = new Car();
	$car3->setOwner('Ken');
	$car3->setColor('pearl essence');
	$car3->setYear('1966');
	$car3->setMake('Jaguar');
	$car3->setModel('XKE');
	$car1->outputData($car3);
?>
