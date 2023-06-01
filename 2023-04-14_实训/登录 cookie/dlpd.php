<?php
// 登录判断页面
if(isset($_POST['btn'])){
    //获取用户提交的信息
    $username=trim($_POST['username']);
    $pwd=trim($_POST['pwd']);
    if(($username=="")||($pwd=="")){
        header('refresh:3;url=yhdl.html');
        echo "用户名或密码不能为空，跳转到登录页面";
    }else if(($username!="xiaorui")||($pwd!="123456")){
        header('refresh:3;url=yhdl.html');
        echo "用户名或密码错误，跳转到登录页面";
    }else if(($username=="xiaorui")&&($pwd=="123456")){
        switch($saveTime){
            case 0:
            setcookie("username",$username);
            break;
            case 1:
            setcookie("username",$username,time()+60*60*2);
            break;
            case 2:
            setcookie("username",$username,time()+60*60*48);
            break;
            case 3:
            setcookie("username",$username,time()+60*60*24*14);
            break;
        }
        header('location:grym.php');
    }
}
?>