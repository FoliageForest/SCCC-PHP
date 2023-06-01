<?php
// 获取登录信息
// 获取当前保存的 cookie
if ($_COOKIE['username'] == null || !isset($_COOKIE['username'])) {
    header('refresh:3;url=yhdl.html');
    echo "<p>三秒跳转</p>";
} else {
    echo $_COOKIE['username'].", 你好<br />";
    echo "<a href='zhuxiao.php'>注销</a>";
}
?>