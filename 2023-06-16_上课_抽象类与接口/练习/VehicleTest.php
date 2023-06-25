<?php
class Vehicle {
  private $capacity;

  function __construct($capacity = 0) {
    $this -> capacity = $capacity;
  }

  function say() {
    echo "capacity = ".$this -> capacity."<br />";
  }

  function __set($property_name, $value) {
    $this -> $property_name = $value;
  }

  function __get($property_name) {
    return $this -> $property_name;
  }
}

class Car extends Vehicle {
  private $speed;

  function __construct($capacity, $speed) {
    parent::__construct($capacity);
    $this -> speed = $speed;
  }

  function speedUp() {
    $this -> speed = $speed + 10;
    return $this -> speed;
  }

  function speedDown() {
    $this -> speed = $speed - 10;
    return $this -> speed;
  }

  function say() {
    echo "capacity = ".$this -> capacity.", speed = ".$this -> speed."<br />";
  }
}
?>