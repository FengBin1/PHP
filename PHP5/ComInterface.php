<?php
// 定义一个名为 ComInterface 的接口
interface ComInterface {
    // 声明连接方法
    public function connect();

    // 声明传输数据方法
    public function transfer();

    // 声明断开连接方法
    public function disconnect();
}

// 定义一个名为 MobilePhone 的类，并实现了 ComInterface 接口
class MobilePhone implements ComInterface {
    // 实现接口中的连接方法
    public function connect() {
        echo "开始连接..."; // 输出连接信息
    }

    // 实现接口中的传输数据方法
    public function transfer() {
        echo "传输数据开始...传输数据结束"; // 输出传输数据信息
    }

    // 实现接口中的断开连接方法
    public function disconnect() {
        echo "断开连接..."; // 输出断开连接信息
    }
}

// 创建 MobilePhone 类的一个匿名对象，并依次调用其连接、传输数据和断开连接方法，并打印输出
echo (new MobilePhone)->connect(); // 输出：开始连接...
echo (new MobilePhone)->transfer(); // 输出：传输数据开始...传输数据结束
echo (new MobilePhone)->disconnect(); // 输出：断开连接...
?>
