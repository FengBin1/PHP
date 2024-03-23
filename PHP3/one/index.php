<?php
session_start();
if (isset($_SESSION['user'])){
    echo '当前登录用户'.$_SESSION['user'].'。';
    echo '<a href="logout.php">退出</a>';
}else{
    header('Location: login.html');
    exit;
}