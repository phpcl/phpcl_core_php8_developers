<?php
// generate_primes.php
function makePrime($max)
{
	$start = microtime(TRUE);
	for ($x = 5; $x < $max; $x++) {
		// This if evaluation checks to see if number is odd or even
		$test = TRUE;
		for($i = 3; $i < $x; $i++) {
			if(($x % $i) === 0) {
				$test = FALSE;
				break;
			}
		}
		if ($test) yield $x;
	}
	$end = microtime(TRUE);
	$run = ($end - $start) * 1000;
	return "\nRun Time: $run ms\n";
}
