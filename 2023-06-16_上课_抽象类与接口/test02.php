<?php
// 抽象类和抽象方法的使用

abstract class Person {
  protected $name;
  protected $country;

  function __construct($name = "", $country = "china") {
    $this -> name = $name;
    $this -> country = $country;
  }

  abstract function say();
  abstract function eat();

  function run() {
    echo "使用两条腿走路<br />";
  }
}
?>