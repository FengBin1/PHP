<?php
$a = ['a', 'b', 'c'];
echo memory_get_usage();
echo '</br>';

$e = $d = $c = $b = $a;
echo memory_get_usage();
echo '</br>';

$e[] = 'e';
echo memory_get_usage();
echo '</br>';

unset($e);
echo memory_get_usage();
echo '</br>';

echo memory_get_peak_usage();
