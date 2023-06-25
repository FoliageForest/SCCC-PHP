<?php
class Animal {
  function getAnimalName() {
    echo "父类 name<br />";
  }

  function echoVoice() {
    echo "父类 echoVoice<br />";
  }
}

class Bird extends Animal {
  function getAnimalName() {
    echo "鸟 name<br />";
  }

  function echoVoice() {
    echo "鸟 voice<br />";
  }
}

class Cat extends Animal {
  function getAnimalName() {
    echo "猫 name<br />";
  }

  function echoVoice() {
    echo "猫 voice<br />";
  }
}

$bird1 = new Bird;
$bird1 -> getAnimalName();
$bird1 -> echoVoice();
$cat1 = new Cat;
$cat1 -> getAnimalName();
$cat1 -> echoVoice();
?>