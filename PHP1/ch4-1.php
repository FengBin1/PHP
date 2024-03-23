<?php
function findMax($num1, $num2) {
    // 使用三元运算符比较两个数，并返回较大的数
    $max = ($num1 > $num2) ? $num1 : $num2;
    return $max;
}
// 例子
$number1 = 8;
$number2 = 12;
// 调用函数并输出结果
$result = findMax($number1, $number2);
echo "较大的数是: " . $result;
?>
