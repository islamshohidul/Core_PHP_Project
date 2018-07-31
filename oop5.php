<?php

	class Car{
		private $model;


		//A constructor method

		public function __construct($model){
			$this -> model = $model;

		}

		public function getCarModel(){
			return "The car model is: ".$this->model;
		}
	}

	$car1 = new Car("Mercedes benz");
	echo $car1->getCarModel();

?>