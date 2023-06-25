<?php
interface One {
  const CONSTANT = 'CONSTANT value';
  function fun1();
  function fun2();
}

abstract class Three implements One {
  function fun2() {
    // 略
  }
}
?>