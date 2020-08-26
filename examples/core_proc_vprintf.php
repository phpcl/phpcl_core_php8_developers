<?php
// core_proc_vprintf.php
$patt = '%s. %s. %s. %s. %s.' . PHP_EOL;
$arr  = ['Person', 'Woman', 'Man', 'Camera', 'TV'];
$args = [
	'Array' => $arr,
	'Int'   => 999,
	'Bool'  => TRUE,
	'Obj'   => new ArrayObject($arr)
];
foreach ($args as $key => $value) {
	try {
		echo $key . ': ' . vsprintf($patt, $value);
	} catch (Throwable $t) {
		echo $key . ': ' . $t->getMessage();
		echo "\n";
	}
}
