<?php


class Person{

	public $name;
	public $age;

	public function __construct($name){
		$this->name = $name;

	}


	public function setAge($age){
		$this->age = $age;

		if ($age <18) {
			throw new Exception("Person is not old enough");
			# code...
		}

	}

	public function getAge(){
		return $this->age*365;
	}
}
$john = new Person("John Doe");
$john->age = 30;
$john->age++;
$john->setAge(56);

//var_dump($john);

var_dump($john->getAge());

