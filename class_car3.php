<?php

class Car {
  // properties
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function moveWheels() {
    $this -> wheels = 10; // $this is referencing the object and used within the class

    // echo "Wheels move";
  }

  function createDoors() {
    $this -> doors = 6;
  }

}

$bmw = new Car(); // creates an instance of the Car class
$truck = new Car();
$bmw -> moveWheels();
echo $bmw -> wheels . "<br>"; // do NOT use the $ for echoing the property

echo $truck -> wheels = 10 . "<br>";
$truck -> createDoors();
echo $truck -> doors;


// $mercedes_benz = new Car();
//
// $bmw -> moveWheels(); // calls in instance of the what's inside the class
// $mercedes_benz -> moveWheels();

?>
