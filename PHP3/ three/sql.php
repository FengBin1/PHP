<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php header('Content-type: text/html; charset=utf-8');
    $link = mysqli_connect("127.0.0.1", "root", "root") or die("连接失败");
    $db_result = mysqli_select_db($link, "section15");
    /*if ($link) {
        echo "数据库连接成功";
    }*/

    /*if ($db_result) {
        echo "数据库选择成功";
    }*/

    /*$sql = "update student set name = 'fengbin' where id = 1";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '更新成功';
    }else{
        echo '更新失败';
    }*/

    $sql = "SELECT id,name,age,course FROM student";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_object($result);

    echo "序号".$rows->id."<br>";
    echo "姓名".$rows->name."<br>";
    echo "年龄".$rows->age."<br>";
    echo "课程".$rows->course."<br>";

    mysqli_close($link);
?>
</body>
</html>