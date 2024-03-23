<?php
// 启动会话
session_start();

// 检查是否接收到了 POST 请求
if($_POST){
    // 接收用户登录表单信息，并去除首尾空白字符
    $user = isset($_POST['user']) ? trim($_POST['user']) : '';
    $pwd = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';

    // 保存正确的用户名和密码
    $data = ['user' => 'Tom','pwd' => 123456];

    // 检查用户提供的用户名和密码是否与保存的一致
    if(($user == $data['user']) && ($pwd == $data['pwd'])){
        // 如果一致，则保存登录信息到会话中
        $_SESSION['user'] = $data['user'];

        // 重定向用户到 index.php 页面
        header('Location: index.php');
        exit; // 终止脚本继续执行
    } else {
        // 如果用户名或密码不正确，则输出错误信息
        echo '用户密码错误';
    }
}

// 引入登录页面
require './login.html';
?>
