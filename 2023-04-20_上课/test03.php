<?php
function &returns_reference() {
    static $someref = 0;
    $someref++;
    return $someref;
}

$newref = &returns_reference();
echo $newref."<br />";
$notref = returns_reference();
$newref = 100;
echo $notref;
$newref = 100;
echo returns_reference();
?>