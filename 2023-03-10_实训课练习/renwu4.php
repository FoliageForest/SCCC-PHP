<?php
$zhengxing = 8; # 整型
$fudianxing = 2.3; # 浮点型
$zifuchuanxing = "HelloWorld"; # 字符串型
$buerxing = true; # 布尔型

echo gettype($zhengxing).": $zhengxing";
// echo "<br />";

echo var_dump($fudianxing);

echo gettype($zifuchuanxing).": $zifuchuanxing";
echo "<br />";

echo gettype($buerxing).": $buerxing";
?>