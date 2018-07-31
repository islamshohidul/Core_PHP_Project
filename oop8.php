


<?php 

/*Interfaces can include abstract methods and constants, but cannot contain concrete methods and variables.
All the methods in the interface must be in the public visibility scope.
A class can implement more than one interface, while it can inherit from only one abstract class.*/
  interface Car{
  	public function setModel($name);

  	public function getModel();
  }

  interface Vehicle {
  	public function setHasWheels($bool);
  	public function getHasWheels();
  }


  class miniCar implements Car ,Vehicle{
  	private $model ;
  	private $hasWheels;

  	public function setModel($name){
  		$this -> model = $name;

  	}

  	public function getModel(){
  		return $this -> model;
  	}

  	public function setHasWheels($bool){
  		$this ->hasWheels = $bool;


  	}

  	public function getHasWheels(){
  		return ($this -> hasWheels)? "has wheels" : "no wheels";
  	}
  }
$car1 = new miniCar();
$car1 -> setModel("Honda");
echo $car1->getModel();

?>