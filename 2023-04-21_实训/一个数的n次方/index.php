<html>
    <head>
    <title>一个数的 n 次方</title>
    </head>
    <body>
    <form method="post">
    <input type="text" name="a" />
    <input type="text" name="b" />
    <input type="submit" name="btn" />
    </form>
    <?php
function foo($a, $b) {
    $reNum = 1;
    for ($i = 0; $i < $b; $i++) {
        $reNum *= $a;
    }
    return $reNum;
}
if (isset($_POST['btn'])) {
    echo "<br /><p>".$_POST['a']." 的 ".$_POST['b']." 次方为 ".foo($_POST['a'], $_POST['b'])."</p>";
}
?>
    </body>
</html>