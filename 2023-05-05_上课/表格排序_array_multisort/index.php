<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>表格排序</title>
    <!-- 使用 array_multisort() 方法 -->
    <!-- 参考 php.net -->
    </head>

<body>
    <form method="post">
        <table border="10">
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>成绩</th>
            </tr>
            <tr>
                <td><input type="text" name="sno[]" /></td>
                <td><input type="text" name="sname[]" /></td>
                <td><input type="text" name="sscore[]" /></td>
            </tr>
            <tr>
                <td><input type="text" name="sno[]" /></td>
                <td><input type="text" name="sname[]" /></td>
                <td><input type="text" name="sscore[]" /></td>
            </tr>
            <tr>
                <td><input type="text" name="sno[]" /></td>
                <td><input type="text" name="sname[]" /></td>
                <td><input type="text" name="sscore[]" /></td>
            </tr>
        </table>
        <input type="submit" name="btn" /><br />
    </form>
<?php
if(isset($_POST['btn'])) {
    $sno = $_POST['sno'];
    $sname = $_POST['sname'];
    $sscore = $_POST['sscore'];
    echo "<table border='10'>";
    echo "<tr><th>学号</th><th>姓名</th><th>成绩</th></tr>";
    for ($i = 0; $i < count($sno); $i++) {
        echo "<tr>";
            echo "<td>".$sno[$i]."</td>";
            echo "<td>".$sname[$i]."</td>";
            echo "<td>".$sscore[$i]."</td>";
            echo "</tr>";
    }
    echo "</table>";
    // TODO 排序
    echo "之前";
    var_dump($sno);
    var_dump($sname);
    var_dump($sscore);

    array_multisort($sno, $sname, $sscore);

    echo "之后";
    var_dump($sno);
    var_dump($sname);
    var_dump($sscore);

    echo "<table border='10'>";
    echo "<tr><th>学号</th><th>姓名</th><th>成绩</th></tr>";
    for ($i = 0; $i < count($sno); $i++) {
        echo "<tr>";
            echo "<td>".$sno[$i]."</td>";
            echo "<td>".$sname[$i]."</td>";
            echo "<td>".$sscore[$i]."</td>";
            echo "</tr>";
    }
    echo "</table>";
}
?>
</body>

</html>