<?php
# 用户功能选择页面
session_start();
echo "<p>".$_SESSION['username'].", 你好.</p>";
echo "<p>点击<a href='demo4.html'>开始购物</a>选择商品</p>";
echo "<p>点击<a href='demo6.php'>注销</a>退出账号</p>";
?>