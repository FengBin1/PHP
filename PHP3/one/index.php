<?php
// 启动会话
session_start();

// 检查是否设置了名为 'user' 的会话变量，即检查用户是否已登录
if (isset($_SESSION['user'])){
    // 如果用户已登录，则输出当前登录用户信息，并提供退出链接
    echo '当前登录用户' . $_SESSION['user'] . '。';
    echo '<a href="logout.php">退出</a>';
} else {
    // 如果用户未登录，则重定向到登录页面，并终止脚本执行
    header('Location: login.html');
    exit;
}
?>
