<?php

class Car {
  // properties
  public $wheels = 4; // public is same as var. available to this class and sub classes
  protected $hood = 1; // available to class and subclass within a method only
  private $engine = 1; // private is only available to this class
  var $doors = 4;
}

$bmw = new Car(); // creates an instance of the Car class
$semi = new Semi();

class Semi extends Car {
  function showProperty() {
    echo $this -> hood;
  }
}

echo $semi -> showProperty();

?>
