<?php
// core_cool_union_types.php

class Test
{
	public function __construct(
	    public int $line = 0,
		public int|float $id = 0,
		public string|NULL $name = NULL) {}
}
try {
	$test[] = new Test(__LINE__, 123, 'Fred');
	$test[] = new Test(__LINE__, 456.789, NULL);
	$test[] = new Test(__LINE__, 'Wilma', TRUE);
} catch (Throwable $t) {
	echo $t . "\n";
}
var_dump($test);
