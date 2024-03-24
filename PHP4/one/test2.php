<?php
// 定义密码变量
$password = '123456';

// 定义匹配模式，该模式用于匹配密码是否符合要求
$pattern = '/^\w{6,20}$/';

// 使用正则表达式函数 preg_match() 进行模式匹配
if (preg_match($pattern, $password)) {
    // 若匹配成功，则输出“密码校验成功”
    echo '密码校验成功';
} else {
    // 若匹配失败，则输出“密码校验失败”
    echo '密码校验失败';
}
?>