<?php
header("content-type:text/html;charset=utf-8");
echo "<title>title</title>";
echo "<form method=\"post\" action=\"demo09.php\">";
for ($i = 0; $i < 5; $i++) {
    echo "xuesheng".$i."dechengji:<input type=text name='stu[]' /><br />";
}
echo "<input type='submit' name='bt' value='tijiao' />";
echo "</form>";
?>