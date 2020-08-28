<?php
// core_cool_sort_stable.php
class Test
{
	public $id;
	public $name;
}
function showArr($arr)
{
	$out  = "\n";
	$cols = 4;
	$iter = new ArrayIterator($arr);
	$patt = '%6s | %03d ' . PHP_EOL;
	$out .= sprintf('%6s | %3s ', 'Name', 'ID') . PHP_EOL;
	$out .= sprintf('%6s | %3s ', '------', '---') . PHP_EOL;
	while ($iter->valid()) {
		for ($x = 0; $x < $cols; $x++) {
			$obj = $iter->current();
			$out .= sprintf($patt, $obj->name, $obj->id);
			$iter->next();
			if (!$iter->valid()) break;
		}
	}
	return $out;
}
		
// build array
$arr = [];
$names = ['Andrew', 'Doug', 'Cal', 'James'];
$max = 20;
for ($x = 0; $x < $max; $x++) {
	$test = new Test();
	// note that the ID value == the order assigned
	$test->id = sprintf('%04d', $x);
	$test->name = $names[array_rand($names)];
	$arr[] = $test;
}
usort($arr, function ($a, $b) { return $a->name <=> $b->name; });
// In PHP 7 the ID values are all over the place
// In PHP 8 the IDs respect the original order assigned
echo "\nSorted by Name\n";
echo showArr($arr);
			
	
