<?php
// 定义URL变量
$url = 'https://baidu.com';

// 定义域名部分的正则表达式模式
$domain = '(([a-z0-9]+\-)*[a-z0-9]+\.){1,3}[a-z]{2,}';

// 定义完整的URL匹配模式，包括协议、域名、端口和路径
$pattern = '/^https?\:\/\/'.$domain.'(:\d+)?(\/\S*)*$/i';

// 使用正则表达式函数 preg_match() 进行模式匹配
if (preg_match($pattern, $url)) {
    // 若匹配成功，则输出“URL is valid”
    echo 'URL is valid';
} else {
    // 若匹配失败，则输出“URL is not valid”
    echo 'URL is not valid';
}
?>
