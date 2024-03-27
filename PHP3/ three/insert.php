<?php
header('Content-type: text/html; charset=utf-8');
$link = mysqli_connect("127.0.0.1", "root", "root") or die("数据库连接失败，
    请检查数据库用户名或密码是否正确");
// 选择数据库
$db_result = mysqli_select_db($link, "section15");
//执行插入数据操作
$sql = "insert into student(name,age,course) values ('ZhaoLiu','20','PHP')";
$result = mysqli_query($link, $sql);
if ($result) {
    echo "数据插入成功<br>";
} else {
    echo "数据插入失败<br>";
}
//执行更新数据操作
$sql = "update student set name= 'ZhangSanSan' where id= 1";
$result = mysqli_query($link, $sql);
if ($result) {
    echo "数据更新成功<br>";
} else {
    echo "数据更新失败<br>";
}
// 关闭数据库连接
mysqli_close($link);

