<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post">
<?php
for ($i = 1; $i < 4; $i++) {
    echo "学生".$i."的成绩: <input type=\"text\" name=\"scoreArray[]\"><br />";
}
?>
    <input type="submit" name="btn" value="提交">
</form>
<?php
if (isset($_POST['btn'])) {
    $yourScore = $_POST['scoreArray'];
    for ($i = 0; $i < count($yourScore); $i++) {
        echo $yourScore[$i]."<br />";
    }
    $buHeGe = 0;
    echo "不及格的成绩: <br />";
    for ($i = 0; $i < count($yourScore); $i++) {
        $t = $yourScore[$i];
        if ($t < 60) {
            $buHeGe++;
            echo $yourScore[$i]."<br />";
        }
    }
    echo "不合格人数为 ".$buHeGe."<br />";
}
?>
</body>

</html>