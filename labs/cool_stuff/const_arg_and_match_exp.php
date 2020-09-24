<?php
// rewrite_this.php
class Web
{
	/**
	 * Rewrite signature using variadic operators
	 * NOTE: samesite = 'None'|'Lax'|'Strict'
	 */
	public function makeCookie(
		$name,
		$val = 1,
		$exp = 0,
		$path = '',
		$dom = '',
		$secure = FALSE,
		$httponly = FALSE,
		$samesite = 'None')
	{
		// rewrite using named arguments
		setcookie($name, $val, $exp, $path, $dom, $secure, $httponly);
	}	
}
