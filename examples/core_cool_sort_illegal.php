<?php
// core_cool_sort_illegal.php
require __DIR__ . '/src/Application/Sort/Test.php';
use Application\Sort\Test;
$arr = Test::build();

// works in PHP 7 but not PHP 8
uasort($arr, function ($a, $b) { return $a->name > $b->name; });
echo "\nSorted by Name\n";
echo "NOTE: sort() wipes out the original keys\n";
echo Test::show($arr);
