<?php
$love = "iii";
$string1 = "abc: $love"; // 双引号遇上美元符
$string2 = 'abc: $love'; // 单引号遇上美元符
echo $string1;
echo "<br />";
echo $string2;
?>