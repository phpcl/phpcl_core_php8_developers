<?php
// generate_primes.php
$start = microtime(TRUE);
$max = 100000;
for ($x = 5; $x < $max; $x++) {
    // This if evaluation checks to see if number is odd or even
    $test = TRUE;
    for($i = 3; $i < $x; $i++) {
        if(($x % $i) === 0) {
            $test = FALSE;
            break;
        }
    }
    if ($test) echo $x . ', ';
}
echo "all prime numbers\n";
$end = microtime(TRUE);
$run = ($end - $start) / 1000000;
echo "Run Time: $run seconds\n";
