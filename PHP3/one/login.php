<?php
session_start();
if($_POST){
    //接受用户登录表单信息
    $user = isset($_POST['user']) ? trim($_POST['user']) : '';
    $pwd = isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
    //保存正确的用户名和密码
    $data = ['user' => 'Tom','pwd' => 123456];
    if(($user == $data['user']) && ($pwd == $data['pwd'])){
        //保存登录信息
        $_SESSION['user'] = $data['user'];
        header('Location: index.php');
        exit;
    }else{
        echo '用户密码错误';
    }
}
require './login.html';
?>