<html>
    <head>
    <title>计算个人所得税</title>
    </head>
    <body>
    <!-- 个人所得税计算参考: https://jcc.bjmu.edu.cn/docs/20220104113607391688.pdf -->
    <form method="post">
    <input type="text" name="jinE" placeholder="税额" />
    <input type="submit" name="btn" />
    </form>
    <?php
function foo($jinE) {
    $reNum = 1;
    for ($i = 0; $i < $b; $i++) {
        $reNum *= $a;
    }
    return $a * $b / 100.0;
}
if (isset($_POST['btn'])) {
    echo "<br /><p>税额: ￥".$_POST['jinE'].", 应缴纳 ￥".foo($_POST['jinE'])."</p>";
}
?>
    </body>
</html>