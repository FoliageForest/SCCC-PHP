<?php
# 判断用户名和密码
session_start();
if (isset($_POST['submitBtn'])) {
    $username = trim($_POST['username']);
    $pwd = $_POST['pwd'];
    if ($username == '' || $pwd=='') {
        header('refresh:3;url=demo1.html');
        echo "不能为空, 3 秒跳转";
    } else if ($username!='xiaorui' || $pwd!='123456') {
        header('refresh:3;url=demo1.html');
        echo "密码错误, 3 秒跳转";
    } else if ($username=='xiaorui' && $pwd=='123456') {
        // 保存 session
        $_SESSION['username'] = $username;
        $_SESSION['pwd'] = $pwd;

        // 判断登录时间 switch 执行
        switch ($_POST['saveTime']) {
            case 0:
                // 不保存 cookie
                setcookie("username", $_POST['username']);
                break;
            case 1:
                // 保存 2 小时
                setcookie("username", $_POST['username'], time() + 60 * 60 * 2);
                break;
            case 2:
                // 保存 2 天
                setcookie("username", $_POST['username'], time() + 60 * 60 * 24 * 2);
                break;
            case 3:
                // 保存 2 周
                setcookie("username", $_POST['username'], time() + 60 * 60 * 24 * 7 * 2);
                break;
        }
        echo $_SESSION['username']."<br />";
        echo $_SESSION['pwd']."<br />";
        // header("location:demo3.php"); ## 老师的跳转语句
        header("refresh:3; url=demo3.php");
        echo "3 秒跳转";
    }
}
?>