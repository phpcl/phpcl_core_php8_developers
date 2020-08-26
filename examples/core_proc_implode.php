<?php
// core_proc_implode.php
$arr  = ['Person', 'Woman', 'Man', 'Camera', 'TV'];
echo __LINE__ . ':' . implode(' ', $arr) . "\n";
echo __LINE__ . ':' . implode($arr, ' ') . "\n";
