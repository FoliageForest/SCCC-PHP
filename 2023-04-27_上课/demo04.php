<?php
// 多维数组
$arr6 = array(
    array("number" => "01", "color" => "red", "number" => "yangguo"),
    array("number" => "02", "color" => "blue", "number" => "yangguo"),
    array("number" => "03", "color" => "heise", "number" => "yangguo")
);
var_dump($arr6);
$arr7 = array(
    "arr1" => array("number" => "01", "color" => "red", "number" => "yangguo"), // 关联数组
    "arr2" => array("02", "red", "yangguo"), // 索引数组
    "arr3" => array("number" => "03", "color" => "red", "number" => "yangguo"),
);
var_dump($arr7);
?>