<?php
// core_cool_mixed_covar_no.php
// demonstrates violation of LSP rules

class Upper
{
	public mixed $phrase;
	public function wide(string $a)
	{
		return base64_encode($a);
	}
	public function narrow(mixed $a)
	{
		return base64_decode($a);
	}
}
class Middle extends Upper
{
	// this does NOT work
	public function narrow(string $a)
	{
		return base64_decode($a);
	}
}
class Finger extends Upper
{
	// this does NOT work
	public string $phrase
}
