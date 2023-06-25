<?php
// PHP 7.7
class Girl {
  private $girlName;

  function __construct($girlName) {
    $this -> girlName = $girlName;
  }

  function getGirlName() {
    echo $this -> girlName."<br />";
  }

  function feedingPet($pet) {
    $pet -> echoVoice();
  }
}

$bird1 = new Bird("鸟");
?>