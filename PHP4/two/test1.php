<?php
$file_list = array(); // 初始化文件列表数组

// 处理文件上传
if (isset($_FILES['upload'])) {
    if ($_FILES['upload']['error'] !== UPLOAD_ERR_OK) {
        exit('发生错误，上传失败。');
    }
    $suffix = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
    $allow_type = array('jpg', 'jpeg', 'gif', 'png');
    if (!in_array($suffix, $allow_type)) {
        exit('不允许的文件类型。');
    }
    $destination = './uploads/' . time() .'.'. $suffix;
    if(is_uploaded_file($_FILES['upload']['tmp_name'])) {
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $destination)) {
            echo '上传成功';
        } else {
            exit('移动文件失败。');
        }
    } else {
        exit('非法上传。');
    }
}

// 处理文件下载
if (isset($_GET['download'])) {
    $file_name = basename($_GET['download']);
    $file_path = './uploads/' . $file_name;
    if (file_exists($file_path)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        readfile($file_path);
        exit;
    } else {
        exit('文件不存在。');
    }
}

// 获取文件列表
$uploads_dir = './uploads/';
if (is_dir($uploads_dir)) {
    if ($handle = opendir($uploads_dir)) {
        while (($file = readdir($handle)) !== false) {
            if ($file != "." && $file != "..") {
                $file_list[] = $file;
            }
        }
        closedir($handle); // 关闭目录句柄
    } else {
        exit('无法打开上传目录。');
    }
} else {
    exit('上传目录不存在。');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>上传文件：</p>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" value="上传">
    </form>
    <p>文件列表：</p>
    <ul>
        <?php if (empty($file_list)): ?>
            <li>目录为空</li>
        <?php else: ?>
            <?php foreach ($file_list as $v): ?>
                <li>
                    <a href="?download=<?php echo urlencode($v); ?>"><?php echo $v; ?></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>
