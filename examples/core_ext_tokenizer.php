<?php
// core_ext_tokenizer.php
// grab a large file
$large  = __DIR__ . '/includes/dbadminer.php';
$source = file_get_contents($large);
$start = microtime(TRUE);
if (substr(PHP_VERSION, 0, 1) == '8') {
        $tokens = PhpToken::getAll($source);
} else {
        $tokens = token_get_all($source);
}
$end  = microtime(TRUE);
$time = ($end - $start) * 1000;
$mem  = number_format(memory_get_peak_usage());
$num  = count($tokens);
echo "Memory Usage : $mem\n";
echo "Time (ms)    : $time\n";
echo "Num Tokens   : $num\n";
