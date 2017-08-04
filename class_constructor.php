<?php

class Car {
  // properties
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;


  function __construct() {
    $this -> wheels = 10; // $this is referencing the object and used within the class
  }


}

$bmw = new Car();

$truck = new Car();
$semi = new Car();


?>
