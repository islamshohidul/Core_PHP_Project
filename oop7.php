<?php 
	
/*We use abstract classes and methods when we need 
to commit the child classes to certain methods that 
they inherit from the parent class but we cannot commit
 about the 
code that should be written inside the methods.........

An abstract class is a class that has at least one abstract 
ethod. Abstract methods can only have names and arguments, 
and no other code. Thus, we cannot create objects out of 
abstract classes. Instead, we need to create child classes 
that add the code into the bodies of the methods, 
and use these child classes to create objects.

*/


abstract class Car {

	protected $tankVolume;

	public function setTankVolume($volume){
		$this -> tankVolume = $volume;
	}

	abstract public function calacNumMilesOnFullTank();
}


class Honda extends Car {
	public function calacNumMilesOnFullTank(){
		$miles = $this -> tankVolume*30;
		return $miles;
	}
}


class Toyota extends Car{
	public function calacNumMilesOnFullTank(){
		return $miles = $this -> tankVolume*33;

	}

	public function getColor(){
		return "beige";

	}
}

$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calacNumMilesOnFullTank();
echo $toyota1 -> getColor();

?>