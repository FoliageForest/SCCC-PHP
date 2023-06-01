<?php
if (isset($_POST['bt'])) {
    $average = 0.0;
    echo "<table border=\"1\">";
    foreach ($_POST['stu'] as $key => $value) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
        $average += $value;
    }
    echo "<tr>";
    echo "<td>平均</td>";
    echo "<td>".$average / count($_POST['stu'])."</td>";
    echo "</table>";
}
?>