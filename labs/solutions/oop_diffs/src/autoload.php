<?php
function __autoload($class)
{
	$fn = SRC_DIR . '/'
		. str_replace('\\', '/', $class)
		. '.php';		
	require_once $fn;
}
