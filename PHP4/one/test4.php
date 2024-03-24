<?php
// 定义邮箱地址变量
$mail = 'mailhw@petalmail.com';

// 定义匹配模式，该模式用于匹配邮箱地址是否符合要求
$pattern = '/^\w+@(([a-z0-9]+\-)*[a-z0-9]+\.){1,3}[a-z]{2,}$/i';

// 使用正则表达式函数 preg_match() 进行模式匹配
if (preg_match($pattern, $mail)) {
    // 若匹配成功，则输出“邮箱地址校验成功”
    echo "邮箱地址校验成功";
} else {
    // 若匹配失败，则输出“邮箱地址校验失败”
    echo "邮箱地址校验失败";
}
?>
