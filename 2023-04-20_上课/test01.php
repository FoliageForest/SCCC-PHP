<?php
$str = 'abc';
function f(&$str) {
    $str.='def';
}
f($str);
echo $str;
?>