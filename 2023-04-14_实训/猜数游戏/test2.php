<?php
if(isset($_POST['btn'])) {
    // 函数参考 https://www.php.net/manual/zh/function.rand.php
    $correctNumber = rand(1, 10);
    $userNumber = trim($_POST['userNumber']);
    if ($correctNumber < $userNumber) {
        echo "你猜的数为 $userNumber, 你猜的数大了"; // 使用 " 而不是 '
    } else if ($correctNumber > $userNumber) {
        echo "你猜的数为 $userNumber, 你猜的数小了";
    } else if ($correctNumber == $userNumber) { // 使用 == 而不是 ===
        echo "你猜的数为 $userNumber, 你猜对了";
    }
}
?>