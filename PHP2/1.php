<?php
$info = 1;
ini_set('display_errors',1);
error_reporting(E_ALL);
echo $info;
error_reporting(E_ALL & ~E_NOTICE);
echo $info;
?>
