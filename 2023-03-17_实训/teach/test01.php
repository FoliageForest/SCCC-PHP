<?php
$num = 1;
$max = 11;
for ($i = 1; $i < $max; $i++) {
    $num = $num * $i;
    echo $i." 的阶乘: ".$num;
    echo "<br />";
}
?>