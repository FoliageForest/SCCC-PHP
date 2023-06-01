<?php
class Person {
    var $name;
    var $sex;
    var $age;
    var $weight;

    function eat() {
        echo "正在吃饭";
    }

    function say() {
        // echo "name = ".$this -> name.", sex = ".$this -> sex.", age = ".$this -> age;
        echo "name = ".$this -> name.", sex = ".$this -> sex.", age = ".$this -> age;
    }

}

$person1 = new Person();
$person1 -> name = "name";
$person1 -> sex = "男";
$person1 -> age = 18;
$person1 -> say();
?>