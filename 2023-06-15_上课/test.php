<?php
class Person {
  private $name;

  public function __set($property_name, $value) {
    $this -> $property_name = $value;
  }

  function p() {
    echo $this -> name;
  }
}

$person = new Person();
echo "aaa<br />";
$person -> p();
echo "bbb<br />";
$person -> name = "lihua";
$person -> p();
?>