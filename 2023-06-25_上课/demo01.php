<?php
// PPT 代码 实训 21 实训 22
interface USB {
  function run();
}

class Ukey implements USB {
  function run() {
    echo "键盘<br />";
  }
}

class Umouse implements USB {
  function run() {
    echo "鼠标<br />";
  }
}

class Ustore implements USB {
  function run() {
    echo "存储<br />";
  }
}

class Computer {
  function useUSB($usb) {
    $usb -> run();
  }
}

$computer = new Computer;
$computer -> useUSB(new Ukey());
$computer -> useUSB(new Umouse());
$computer -> useUSB(new Ustore());
?>