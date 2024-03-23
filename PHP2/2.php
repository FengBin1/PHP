<?php
$start = microtime(true);
for ($i = 0; $i < 3000000; ++$i) {}
$end = microtime(true);
echo $end - $start;