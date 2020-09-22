<?php
class Loader
{
	protected $dir = '';
	// this has to be __construct()
	// public function loader($dir)
	public function __construct($dir)
	{
		$this->dir = $dir;
	}
	public function __invoke($class) 
	{
		$fn = $this->dir . '/'
			. str_replace('\\', '/', $class)
			. '.php';		
		require_once $fn;
	}
}
