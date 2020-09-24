<?php
// core_cool_mixed_covar_ok.php
// demonstrates co-variance support

class Upper
{
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
	// this works OK
	public function wide(mixed $a)
	{
		return parent::wide($a);
	}
}

$phrase = 'FCF Continuous Learning';
$middle = new Middle();
$encoded = $middle->wide($phrase);
$decoded = $middle->narrow($encoded);

echo "\nOriginal: $phrase\n";
echo "\nBase 64 : $encoded\n";
echo "\nDecoded : $decoded\n";

