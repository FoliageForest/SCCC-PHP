<?php
$students = array(
    '2010' => array('aaa', "80"),
    '2011' => array('bbb', "81"),
);

foreach ($students as $key => $v) {
    echo $key.":";
    foreach ($val as $v) {
        echo $v;
    }
    echo "<br />";
}
?>