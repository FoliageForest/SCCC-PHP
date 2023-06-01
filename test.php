<?php
$func = function() {
    echo "hello, world", "<hr />";
    echo __LINE__, __FUNCTION__;
};

// 匿名函数
$func();

echo "<hr />";

var_dump($func);
?>