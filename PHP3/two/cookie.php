<?php
// 设置响应内容类型及字符集
header("Content-type:text/html;Charset=utf-8");

// 检查是否设置了名为 'visits' 的 Cookie
if (!isset($_COOKIE['visits'])){
    // 如果未设置 'visits' Cookie，则将访问次数设置为 1，并设置 Cookie 过期时间为一天后
    $visits = 1;
    setcookie('visits', $visits, time() + 3600 * 24);
} else {
    // 如果已设置 'visits' Cookie，则将访问次数加一，并更新 Cookie 的过期时间为一天后
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + 3600 * 24);
}

// 根据访问次数输出相应的信息
if ($visits > 1){
    echo '这是你第' . $visits . '登录';
} else {
    echo '这是你第首次登录';
}
?>
