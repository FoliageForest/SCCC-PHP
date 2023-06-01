<?php
$sum = 0;
$temp = 1;
for ($i = 1; $i < 11; $i++) {
    $temp *= $i;
    $sum += $temp;
    echo $i." 的阶乘为 ".$temp."<br />";
}
echo "总和为 ".$sum;
?>