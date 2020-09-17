<?php
class Loader
{
	protected $dir = '';
	public function loader($dir)
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
