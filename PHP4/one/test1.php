<?php
// 定义用户名变量
$username = "user";

// 定义匹配模式，该模式用于匹配用户名是否符合要求
$pattern = '/^[a-zA-Z]{4,12}$/';

// 使用正则表达式函数 preg_match() 进行模式匹配
if (preg_match($pattern, $username)) {
    // 若匹配成功，则输出“校验成功”
    echo "校验成功";
} else {
    // 若匹配失败，则输出“校验失败”
    echo '校验失败';
}
?>
