<?php
class Car {
    var $model;
    var $color;
    var $weight;

    function __construct($model, $color, $weight) {
        $this -> model = $model;
        $this -> color = $color;
        $this -> weight = $weight;
    }

    function __destruct() {
        echo "您的".$this -> color."车 ".$this -> model." 坏了....快买辆新的吧<br />";
    }

    function guaDang() {
        echo "您的车".$this -> model."正在挂档...<br />";
    }

    function stop() {
        echo "您的车".$this -> model."正在停车...<br />";
    }

    function startRun() {
        echo "您的车".$this -> model."正在开跑...<br />";
    }
}

$car1 = new Car("宝马", "黑色", 1200);
echo "喜提新车, 型号: ".$car1 -> model.", 颜色: ".$car1 -> color.", 车重: ".$car1 -> weight."kg<br />";

$car1 -> startRun();
$car1 -> guaDang();
$car1 -> stop();

unset($car1);

$car2 = new Car("奔驰", "白色", 1600);
echo "喜提新车, 型号: ".$car2 -> model.", 颜色: ".$car2 -> color.", 车重: ".$car2 -> weight."kg<br />";
?>