<?php
header("Content-type:text/html;Charset=utf-8");
if (!isset($_COOKIE['visits'])){
    $visits = 1;
    setcookie('visits',$visits,time()+3600*24);
}else{
    $visits = $_COOKIE['visits']+1;
    setcookie('visits',$visits,time()+3600*24);
}
if ($visits >1){
    echo '这是你第'.$visits.'登录';
}else{
        echo '这是你第首次登录';
}