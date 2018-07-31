<?php
/* Inheritance allows us to write the code only once
 in the parent, and then use the code in 
 both the parent and the child classes.*/


 /**
 * 
 */

class Car{
	private $model;


	public function setModel($model){
		$this -> model = $model;

	}
	public function hello(){
		return "beep! I am a <i>".$this -> model."</i>";
	}
}

 class SportsCar extends car
 {
 	private $style = "fast and furious";

 	public function diveItWithStyle( )
 	{
 		return "Drive a". $this -> hello()."<i>". $this -> style ."</i>";
 	}
 }

 $SportsCar1 = new SportsCar();
 $SportsCar1 -> setModel("Mercedes benz");

 echo $SportsCar1 -> diveItWithStyle();


/*When we declare a property or a method 
as protected, we can approach it from both 
the parent and the child classes.

*/



?>