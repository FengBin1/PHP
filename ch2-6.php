<?php
// 计算圆的面积
$radius = 10;
$circleArea = M_PI * pow($radius, 2);

// 计算梯形的面积
$upperBase = 20;
$lowerBase = 30;
$height = 10;
$trapezoidArea = 0.5 * ($upperBase + $lowerBase) * $height;

// 检查是否都大于50
if ($circleArea > 50 && $trapezoidArea > 50) {
    // 输出两个图形的面积
    echo "圆的面积: " . $circleArea . "\n";
    echo "梯形的面积: " . $trapezoidArea . "\n";
} else {
    echo "圆和梯形的面积至少有一个不大于50。\n";
}
?>
