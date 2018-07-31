<?php



class Car {
	public $tank;


	//Add gallons of fule to the tank when we fill it

	public function fill($float){
		$this -> tank  += $float;
		return $this;

	}

	public function ride($float){

		$miles = $float;
		$gallons = $miles/50;
		$this->tank -= $gallons;
		
		return $this;
	}



}

	$bmw = new Car();
	$tank  = $bmw ->fill(10) ->ride(400) ->tank;
	echo "The number of gallons left in the tank: " . $tank . " gal.";	

?>