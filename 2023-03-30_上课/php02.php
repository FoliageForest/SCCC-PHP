<?php
if (isset($_GET["Tj"])) {
    $l = $_GET["length"];
    $w = $_GET["width"];
    $area = $l * $w;
    echo $area;
} else {
    header("location:demo02.html");
}
?>