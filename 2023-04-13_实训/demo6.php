<?php
# 注销页面
session_start();
echo "<p>".$_SESSION['username'].", 再见</p>";
session_destroy();
echo "<a href='demo1.html'>重新登录</a>";
?>