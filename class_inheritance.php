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

class Plane extends Car { // "extends" inherits everything from the Car class

  var $wheels = 20; // this overwrites the parents value

}

$jet = new Plane();

// $jet -> moveWheels();
echo $jet -> wheels; // inherited wheels "4"

// if(class_exists("Plane")) {
//   echo "it exists!";
// }

?>
