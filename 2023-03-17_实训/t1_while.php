<?php
$sum = 0;
$temp = 1;
$i = 1;
while ($i < 11) {
    $temp *= $i;
    $sum += $temp;
    echo $i." 的阶乘为 ".$temp."<br />";
    $i++;
}
echo "总和为 ".$sum;
?>