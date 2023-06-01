<?php
$students = array(
    '2010' => 'aaa',
    '2011' => 'bbb',
    // 2010 => 'aaa',
    // 2011 => 'bbb',
);
echo gettype($students)."<br />";
echo "======================<br />";
foreach($students as $v) {
    echo gettype($v).": ".$v."<br />";
}
echo "======================<br />";
foreach($students as $key => $v) {
    echo $key." > ".$v."<br />";
    echo gettype($key)." > ".gettype($v)."<br />";
}
?>