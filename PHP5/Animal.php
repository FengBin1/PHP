<?php
// 定义一个抽象类 Animal
abstract class Animal{
    // 声明一个抽象方法 shout()
    public abstract function shout();
}

// 定义 Cat 类，继承自 Animal
class Cat extends Animal{
    // 实现父类的抽象方法 shout()
    public function shout(){
        echo "喵喵..."; // 猫的叫声
    }
}

// 定义 Dog 类，继承自 Animal
class Dog extends Animal{
    // 实现父类的抽象方法 shout()
    public function shout(){
        echo "汪汪..."; // 狗的叫声
    }
}

// 定义一个函数 getShout($animal)，用于获取动物的叫声
function getShout($animal)
{
    return $animal->shout(); // 调用动物对象的 shout() 方法
}

// 创建 Cat 类的一个实例
$cat = new Cat();

// 调用 getShout() 函数，传入猫的实例
getShout($cat); // 输出：喵喵...
?>
