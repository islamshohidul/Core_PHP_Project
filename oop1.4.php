<?php

abstract class Shape{

	abstract protected function getArea();


}

class Square extends Shape{

	protected $length = 4;
	public function getArea(){
		return pow($this->length,2);

	}

}

class Regtangle extends Shape{
	protected $width = 10;
	protected $height = 20;

	public function getArea(){
		return $this->width*$this->height;

	}


}



echo (new Square)->getArea();

echo "<br>";
echo (new Regtangle)->getArea();