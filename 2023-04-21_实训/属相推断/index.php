<html>
    <head>
    <title>推算属相</title>
    </head>
    <body>
    <form method="post">
    出生年份: <input type="text" name="year" placeholder="placeholder" />
    <input type="submit" name="btn" value="推断" />
    </form>
<?php
function getAnimal($year) {
    $animal = "";
    switch ($year % 12) {
        case 4: $animal = "鼠"; break;
        case 5: $animal = "牛"; break;
        case 6: $animal = "虎"; break;
        case 7: $animal = "兔"; break;
        case 8: $animal = "龙"; break;
        case 9: $animal = "蛇"; break;
        case 10: $animal = "马"; break;
        case 11: $animal = "羊"; break;
        case 0: $animal = "猴"; break;
        case 1: $animal = "鸡"; break;
        case 2: $animal = "狗"; break;
        case 3: $animal = "猪"; break;
        default: $animal = "计算出错";
    }
    return $animal;
}
if (isset($_POST['btn'])) {
    $year = $_POST['year'];
    echo "<br /><p>您的属相是: ".getAnimal($year)."</p>";
}
?>
    </body>
</html>