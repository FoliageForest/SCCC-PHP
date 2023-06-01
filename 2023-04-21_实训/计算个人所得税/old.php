<html>
    <head>
    <title>计算个人所得税</title>
    </head>
    <body>
    <!-- 个人所得税计算参考: https://jcc.bjmu.edu.cn/docs/20220104113607391688.pdf -->
    <form method="post">
    <input type="text" name="a" placeholder="税额" />
    <input type="text" name="b" placeholder="税率 (单位: %)" />
    <input type="submit" name="btn" />
    </form>
    <?php
function foo($a, $b) {
    $reNum = 1;
    for ($i = 0; $i < $b; $i++) {
        $reNum *= $a;
    }
    return $a * $b / 100.0;
}
if (isset($_POST['btn'])) {
    echo "<br /><p>税额: ￥".$_POST['a'].", 税率: ".$_POST['b']."%, 应缴纳 ￥".foo($_POST['a'], $_POST['b'])."</p>";
}
?>
    </body>
</html>