<?php
if(isset($_POST["tiJiaoAnNiu"])) {
    echo "姓名: ".$_POST["personName"]."<br />";
    echo "性别: ".$_POST["sex"]."<br />";
    echo "年龄: ".$_POST["personAge"]."<br />";
    echo "联系电话: ".$_POST["telephoneNumber"]."<br />";
    echo "所属社区: ".$_POST["suoShuSheQu"]."<br />";
    echo "何地来川: ".$_POST["heDiLaiChuan"]."<br />";
    $buShiZhengZhuang = $_POST["buShiZhengZhuang"];
    echo "不适症状:";
    for ($i = 0; $i < count($buShiZhengZhuang); $i++) {
        echo " ".$buShiZhengZhuang[$i];
    }
    echo "<br />";
    echo "核酸结果: ".$_POST["heSuanJieGuo"]."<br />";
    echo "备注: <br />======================<br />".$_POST["beiZhu"]."<br />======================<br />";
} else {
    header("location:html01.html");
}
?>