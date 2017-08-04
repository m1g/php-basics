<?php

class Car {

  function moveWheels() {
    echo "Wheels move";
  }

}

if(method_exists("Car", "moveWheels")) { // built-in function to find methods
  echo "The method exists!";
} else {
  echo "No method found";
}

?>
