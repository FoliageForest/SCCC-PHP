<?php
class Student {
    var $name;
    var $sex;
    var $id;

    function __construct($sex) {
        $this -> sex = $sex;
    }

    function setName($name) {
        $this -> name = $name;
    }

}

$student = new Student("男");
$student -> id = "1234567";
$student -> setName("李华");

echo "name = ".$student -> name.", sex = ".$student -> sex.", id = ".$student -> id."<br />";
?>