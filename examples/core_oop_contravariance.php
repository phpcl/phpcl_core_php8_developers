<?php
// core_oop_contravariance.php
spl_autoload_register(
	function ($class) {
		$fn = __DIR__ 
			. '/src/' 
			. str_replace('\\', '/', $class)
			. '.php';
		require_once $fn;
	}
); 
use Application\Variance\{IterTest,IterObj};
$test  = new IterTest();
$objIt = new IterObj([1,2,3]);
$arrIt = new ArrayIterator(['A','B','C']);
echo $test->stringify($objIt);
echo $test->stringify($arrIt);
