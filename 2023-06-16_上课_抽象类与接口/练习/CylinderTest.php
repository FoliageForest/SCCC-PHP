<?php
interface A {
  const PI = 3.14;
  function area();
}

interface B {
  function setColor();
}

interface C extends A, B {
  function volume();
}

class Cylinder implements C {
  var $radius;

  function area() {}

  function setColor() {}

  function volume() {}
}
?>