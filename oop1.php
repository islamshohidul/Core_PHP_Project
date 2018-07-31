<?php 

/**
* 
*/
class Car
{

	public $comp;
	public $color = 'beige';
	//public $hasSunRoof = true;


	//Method 

	public function hello(){

		return "beep";
	}
	
	
}


$bmw = new Car();
$mercedes = new Car();

echo $bmw -> color;
echo "<br />";
echo $mercedes -> color;


echo "<hr />";
 
// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
 
// Get the values again
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";
 echo $bmw -> hello(); // beep
echo "<br />";
echo $mercedes -> hello(); // bee



?>