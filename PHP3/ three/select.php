<?php
// 设置响应内容类型及字符集
header('Content-type: text/html; charset=utf-8');

// 连接数据库
$link = mysqli_connect("127.0.0.1", "root", "root") or die("数据库连接失败，请检查数据库用户名或密码是否正确");

// 选择数据库
$db_result = mysqli_select_db($link, "section15");

// 执行数据操作
$sql = "SELECT id, name, age, course FROM student";
$result = mysqli_query($link, $sql);

// 获取查询结果的第一行数据
$rows = mysqli_fetch_object($result);

// 输出查询结果
echo "序号" . $rows->id . "<br>";
echo "姓名" . $rows->name . "<br>";
echo "年龄" . $rows->age . "<br>";
echo "课程" . $rows->course . "<br>";

// 关闭数据库连接
mysqli_close($link);
?>
