<?php
// 定义一个名为 'car' 的类
class car {
    // 定义一个受保护的属性 'carName'，默认值为 '比亚迪系列'
    protected $carName = '比亚迪系列';
}

// 定义一个名为 'SmallCar' 的类，该类继承自 'car' 类
class SmallCar extends car {
    // 定义一个名为 'say' 的公共方法
    public function say() {
        // 尝试从父类中访问受保护的属性 'carName'
        echo "调用父类中的属性：" . $this->carName . "<br>";
    }
}

// 创建 'SmallCar' 类的一个实例
$car = new SmallCar();

// 调用该实例的 'say' 方法
$car->say();
?>
