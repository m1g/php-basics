<?php

class Car {
  // properties
  static $wheels = 4;
  var $hood = 1;

  function moveWheels() {
    Car::$wheels;
  }

}

$bmw = new Car(); // creates an instance of the Car class

Car::moveWheels(); // calls static data via the moveWheels() method
echo Car::$wheels;

?>
