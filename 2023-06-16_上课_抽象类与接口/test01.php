<?php
// 抽象类和抽象方法的使用

abstract class Shape {
  abstract protected function get_area();
}

class Rectangle extends Shape {
  private $width;
  private $height;
  function __construct($width = 0, $height = 0) {
    $this -> width = $width;
    $this -> height = $height;
  }
  function get_area() {
    echo ($this -> width + $this -> height) * 2;
    echo "<br />";
  }
}

$Shape_rect = new Rectangle(20, 30);
$Shape_rect -> get_area();
?>