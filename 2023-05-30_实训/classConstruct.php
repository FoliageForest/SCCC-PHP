<?php
class Person {
    var $name;
    var $sex;
    var $age;

    function __construct($name, $sex, $age) {
        $this -> name = $name;
        $this -> sex = $sex;
        $this -> age = $age;
    }

    // 没有参数
    function __destruct() {
        echo $this -> name.", 再见...<br />";
    }

/* 
    // 构造函数只能有一个
    function __construct($name) {
        $this -> name = $name;
    }
 */
    function run() {
        echo "正在跑步"."<br />";
    }

    function eat() {
        echo "正在吃饭"."<br />";
    }

    function say() {
        // echo "name = ".$this -> name.", sex = ".$this -> sex.", age = ".$this -> age;
        echo "name = ".$this -> name.", sex = ".$this -> sex.", age = ".$this -> age."<br />";
    }

}

$person1 = new Person("李华", "男", 18);
$person1 -> say();
$person1 -> run();
$person1 -> eat();
?>