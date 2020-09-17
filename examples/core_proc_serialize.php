<?php
// core_proc_serialize.php
define('TARGET_DIR', __DIR__ . '/data');
class Test
{
	public $arr = [];
	public $obj1 = NULL;
	public $obj2 = NULL;
}

// build up object
$arr  = ['A' => 111, 'B' => 222, 'C' => 333];
$test = new Test();
$test->arr = $arr;
$test->obj1 = new ArrayObject($arr);
$test->obj3 = new ArrayIterator($arr);

// store serialized version based on PHP vers
$phpFile = TARGET_DIR . '/serial_' . PHP_VERSION . '.txt';
$str = serialize($test);
echo $str . "\n";
file_put_contents($phpFile, $str);

// unserialize all files in TARGET_DIR
$list = glob(TARGET_DIR . '/serial_*');
foreach ($list as $fn) {
	$restored = file_get_contents($fn);
	$obj = unserialize($restored);
	echo "\n" . basename($fn) . "\n";
	var_dump($obj);
}
