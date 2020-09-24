<?php
class Loader
{
	protected $dir = '';
	public function __construct($dir)
	{
		$this->dir = $dir;
		spl_autoload_register($this);
	}
	public function __invoke($class) 
	{
		$fn = $this->dir . '/'
			. str_replace('\\', '/', $class)
			. '.php';		
		require_once $fn;
	}
}
