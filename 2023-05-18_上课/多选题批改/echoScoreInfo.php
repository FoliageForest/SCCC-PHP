<?php
if(isset($_POST['btn'])) {
    $myScore = $_POST['myScore'];
    $scoreOk = array("PHP", "ASP", "JSP");
    for ($i = 0; $i < count($myScore); $i++) {
        echo "<br />".$myScore[$i];
    }
    $boo = "错误";
    if ( count(array_diff($scoreOk, $myScore)) == 0 && count(array_diff($scoreOk, $myScore)) == 0 ) {
        $boo = "正确";
    }
    echo "<br />";
    echo "判断为: ".$boo;
    echo "<script>alert('".$boo."');</script>";
}
?>