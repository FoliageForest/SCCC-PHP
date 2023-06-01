<?php
function f($s = "def") {
    return "abc".$s;
}
echo f()."<br />";
echo f(null)."<br />";
echo f("ghi");
?>