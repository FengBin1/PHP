<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
function king($n, $m)
{
    $monkey = range(1, $n);
    $i = 0;
    while (count($monkey) > 1) {		  // 循环猴子
        ++$i;
        $head = array_shift($monkey);	  // 从前往后依次取出猴子
        // 判断是否踢出猴子，不踢则把该猴子返回尾部
        if ($i % $m != 0) {
            array_push($monkey, $head);
        }
    }
    return ['total' => $n, 'kick' => $m, 'king' => $monkey[0]];
}
$data = king(100, 5);
?>
<table>
    <tr><th colspan="2">找猴王游戏</th></tr>
    <tr><td>猴子总数：</td><td><?=$data['total']?></td></tr>
    <tr><td>踢出第m只猴子：</td><td><?=$data['kick']?></td></tr>
    <tr><td>猴王编号：</td><td><?=$data['king']?></td></tr>
</table>
</body>
</html>