<?php
echo "<!DOCTYPE html><html><head><meta charset=\"utf-8\"><title>四川化工职业技术学院 PHP课程</title></head><body>";

define("gongJi", 1);
define("muJi", 2);
define("xiaoJi", 0.5);

$count = 0;

// table 标签开始
echo "<table>";
echo "<tr>";
echo "<th>公鸡</th>";
echo "<th>母鸡</th>";
echo "<th>小鸡</th>";
echo "</tr>";
for ($i = 0; $i < 101; $i++) {
    for ($j = 0; $j < 101; $j++) {
        for ($k = 0; $k < 101; $k++) {
            if ($i * gongJi + $j * muJi + $k * xiaoJi == 100 and $i + $j + $k == 100) {
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$j."</td>";
                echo "<td>".$k."</td>";
                echo "</tr>";
                $count++;
            }
        }
    }
}
echo "</table>";
// table 标签结束

echo $count;
echo "</body></html>";
?>