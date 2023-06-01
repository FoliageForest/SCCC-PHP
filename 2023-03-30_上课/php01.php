<?php
if (isset($_POST["Tj"])) {
    $name = $_POST["name"];
    // $kc = $_POST["Kc"];
    // $kcstr="";
    // for ($i = 0; $i < count($kc); $i++) {
    //     $kcstr.=$kc[$i]."&nbsp";
    // }
    echo $name;
} else {
    header("location:php01.php");
}
?>