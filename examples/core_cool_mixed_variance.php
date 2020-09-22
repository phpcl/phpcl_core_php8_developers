<?php
// core_cool_mixed_variance.php
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
	public function wide(wide $a)
	{
		return parent::wide($a);
	}
}
class Finger extends Upper
{
	// this does not work
	public function narrow(string $a)
	{
		return parent::narrow($a);
	}
}

$phrase = 'FCF Continuous Learning';
$middle = new Middle();
$finger = new Finger();
$encoded = $middle->wide($phrase);
$decoded = $finger->narrow($encoded);

echo "\nOriginal: $phrase\n";
echo "\nBase 64 : $encoded\n";
echo "\nDecoded : $decoded\n";

