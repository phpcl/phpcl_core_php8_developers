<?php
// try_catch_test.php
function test(callable $callback, array $params = [])
{
	$output = '';
	try {
		$callback($params);
		$output = "It works!\n";
	} catch (Throwable $t) {
		$output = get_class($t) . ':' . $t->getMessage();
		$output .= "\n";
	}
	return $output;
}
