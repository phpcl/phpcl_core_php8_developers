<?php
// core_proc_substr_len.php
$str = 'The quick brown fox jumped over the fence';
$pos = strpos($str, 'fox');
$len = NULL;
var_dump(substr($str, $pos, $len));
echo "\n";
