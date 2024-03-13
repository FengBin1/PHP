<?php
    $fenshu = 61;
    echo"你的分数是：".$fenshu.", 属于：";
    if ($fenshu  >= 90) {
        echo '优秀';
    } else if ($fenshu>80 && $fenshu<=90)  {
        echo '良好';
    } else if ($fenshu>70 && $fenshu<=80) {
        echo '一般';
    } else if ($fenshu>60 && $fenshu<=70) {
        echo '及格';
    } else {
        echo '差';
    }
?>
