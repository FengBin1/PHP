<?php
    $fenshu = 90;
    $f=(int)($fenshu/10);
    echo"你的分数是：".$fenshu.", 属于：";
    switch ($f) {
        case 9: echo "优秀";break;
        case 8: echo "良好";break;
        case 7: echo "中等";break;
        case 6: echo "及格";break;
        default: echo "不及格";
    }
?>