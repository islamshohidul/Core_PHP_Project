<?php 
//The $his keyword indicates that we use the class's own method and 
//properties, and allows us to have access to the within the class's scope

class Car {

    // The properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
 
    // The method can now approach the class properties
    // with the $this keyword
    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color;
    }
}

$bmw = new Car();
$mercedes = new Car();

$bmw ->comp = "BMW";
$bmw ->color = "blue";
$mercedes ->comp = "Mercedes Benz";
$mercedes ->color = "green";

echo $bmw ->hello();
echo "<br>";
echo $mercedes->hello();

?>