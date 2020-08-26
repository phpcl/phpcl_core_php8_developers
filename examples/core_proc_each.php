<?php
// core_proc_each.php
// Taken from https://www.forbes.com/real-time-billionaires/
$billionaires = [
    ['Bill Gates' => 115200000000],
    ['Bernard Arnault' => 111900000000],
    ['Elon Musk' => 90300000000],
    ['Jeff Bezos' => 197500000000],
    ['Larry Ellison' => 74300000000],
    ['Larry Page' => 70600000000],
    ['Mark Zuckerberg' => 99700000000],
    ['Mukesh Ambani' => 78400000000],
    ['Steve Ballmer' => 72800000000],
    ['Warren Buffet' => 80300000000],
];

echo "\n-------------------------------------------\n";
echo "Using each()\n";
echo "-------------------------------------------\n";
printf("%20s | %20s\n", 'Name', 'Net Worth');
printf("%20s | %20s\n", str_repeat('-', 20), str_repeat('-', 20));

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
echo "\n-------------------------------------------\n";
echo "Using ArrayIterator\n";
echo "-------------------------------------------\n";
printf("%20s | %20s\n", 'Name', 'Net Worth');
printf("%20s | %20s\n", str_repeat('-', 20), str_repeat('-', 20));
foreach ($billionaires as $item) {
	// "each()" no longer works in PHP 8:
	$iter = new ArrayIterator($item);
	printf("%20s | %20s\n", 
		   $iter->key(), 
		   number_format($iter->current(), 0, '.', ',')
	);
}
