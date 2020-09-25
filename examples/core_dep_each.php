<?php
// core_proc_each.php
$billionaires = include __DIR__ . '/includes/billionaires.php';
echo showHeader('each()');
try {
	foreach ($billionaires as $item) {
		// "each()" no longer works in PHP 8:
		[$name, $net_worth] = each($item);
		printf("%20s | %20s\n", 
			   $name, 
			   number_format($net_worth, 0, '.', ',')
		);
	}
} catch (Throwable $t) {
	echo $t . "\n";
}

// alternate syntax:
echo showHeader('ArrayIterator');
foreach ($billionaires as $item) {
	// "each()" no longer works in PHP 8:
	$iter = new ArrayIterator($item);
	printf("%20s | %20s\n", 
		   $iter->key(), 
		   number_format($iter->current(), 0, '.', ',')
	);
}
