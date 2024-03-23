<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    // 设置响应内容类型及字符集
    header('Content-type: text/html; charset=utf-8');

    // 连接数据库
    $link = mysqli_connect("127.0.0.1", "root", "root") or die("连接失败");

    // 选择数据库
    $db_result = mysqli_select_db($link, "section15");

    /* // 检查数据库连接
    if ($link) {
        echo "数据库连接成功";
    }*/

    /* // 检查数据库选择
    if ($db_result) {
        echo "数据库选择成功";
    }*/

    /* // 更新数据示例
    $sql = "update student set name = 'fengbin' where id = 1";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '更新成功';
    }else{
        echo '更新失败';
    }*/

    // 查询数据
    $sql = "SELECT id, name, age, course FROM student";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_object($result);

    // 输出查询结果
    echo "序号" . $rows->id . "<br>";
    echo "姓名" . $rows->name . "<br>";
    echo "年龄" . $rows->age . "<br>";
    echo "课程" . $rows->course . "<br>";

    // 关闭数据库连接
    mysqli_close($link);
?>
</body>
</html>
