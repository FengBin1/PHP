<?php
// 设置响应内容类型及字符集
header('Content-type: text/html; charset=utf-8');

// 连接数据库
$link = mysqli_connect("127.0.0.1", "root", "root") or die("数据库连接失败，请检查数据库用户名或密码是否正确");

// 选择数据库
$db_result = mysqli_select_db($link, "section15");
if ($db_result) {
    echo "section15数据库选择成功";
}

// 关闭数据库连接
mysqli_close($link);
?>
