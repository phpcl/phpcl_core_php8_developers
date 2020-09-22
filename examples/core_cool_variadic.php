<?php
// core_cool_variadic.php
class Upper {
	public function test(int $many, string $parameters, $here) {}
}
class Lower extends Upper {
	public function test(...$everything) {}
}
