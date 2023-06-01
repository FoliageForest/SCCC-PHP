<?php
$a = 2;
$b = 1;
$c = 3;
echo "第一个数: ".$a;
echo "<br />";
echo "第二个数: ".$b;
echo "<br />";
echo "第三个数: ".$c;
echo "<br />";
$temp;
if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
if ($a > $c) {
    $temp = $a;
    $a = $c;
    $c = $temp;
}
if ($b > $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
}
echo "最小数: ".$a;
echo "<br />";
echo "最大数: ".$c;
?>