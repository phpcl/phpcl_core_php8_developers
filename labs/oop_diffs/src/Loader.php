<?php
class Loader
{
	public function __invoke($class) 
	{
		$fn = SRC_DIR . '/'
			. str_replace('\\', '/', $class)
			. '.php';		
		require_once $fn;
	}
}
$loader = new Loader();
spl_autoload_register($loader);
