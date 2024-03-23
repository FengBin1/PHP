<?php
// 启动会话
session_start();

// 清空用户会话数据
$_SESSION['user'] = [];

// 销毁会话
session_destroy();

// 重定向用户到登录页面
header('Location: login.html');
?>
