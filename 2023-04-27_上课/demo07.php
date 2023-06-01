<?php
$testArr = array(3, 8, 12, 45, 52, 63);
echo "<table border=\"1\">";
foreach ($testArr as $key => $value) {
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value."</td>";
    echo "</tr>";
}
echo "</table>";
?>
<!-- <table border="1">
  <tr>
    <td>100</td>
    <td>200</td>
    <td>300</td>
  </tr>
  <tr>
    <td>400</td>
    <td>500</td>
    <td>600</td>
  </tr>
</table> -->