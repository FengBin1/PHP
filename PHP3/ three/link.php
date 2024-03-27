<!DOCTYPE html>
<html>
<head>
    <title>PHP代码嵌入到HTML中</title>
</head>
<body>
    <?php
    // 设置响应内容类型及字符集
    header('Content-type: text/html; charset=utf-8');

    // 连接数据库
    $link = mysqli_connect("127.0.0.1", "root", "root") or die("连接失败");

    // 检查数据库连接
    if ($link) {
        echo "数据库连接成功";
    }
    ?>
</body>
</html>
