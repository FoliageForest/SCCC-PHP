<?php
$s = "abcd";
$today = date('m-d', time());
$week = date("m");
echo gettype($s).", ";
echo gettype($today).", ";
echo gettype($week).", ";
echo "<br />";
echo $s;
echo "<br />";
echo $today;
echo "<br />";
echo $week;
echo "<br />";
var_dump($week);
?>