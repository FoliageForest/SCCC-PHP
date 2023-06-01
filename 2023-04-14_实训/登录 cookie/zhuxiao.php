<?php
// 注销
echo $_COOKIE['username']."<br />";
setcookie('username', null);
echo "<a href='index.html'>进入主页</a>";
?>