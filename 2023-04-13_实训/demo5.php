<?php
# 购物结算页面
session_start();
// 判断
if (isset($_POST['demo5SubmitBtn'])) {
    $xuanZe = $_POST['xuanZeDeShangPin'];
    for ($i = 0; $i < count($xuanZe); $i++) {
        echo $xuanZe[$i]."<br />";
    }
}
echo "<a href='demo6.php'>确认</a>";
?>