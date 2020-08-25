<?php
// core_spl_heap.php
$heap = new class () extends SplHeap {
    public function compare(array $arr1, array $arr2) : int {
		$cmp1 = array_values($arr1)[0];
		$cmp2 = array_values($arr2)[0];
		return $cmp1 <=> $cmp2;
    }
};

// Taken from https://www.forbes.com/real-time-billionaires/
$heap->insert(['Bill Gates' => 115200000000 ]);
$heap->insert(['Bernard Arnault' => 111900000000 ]);
$heap->insert(['Elon Musk' => 90300000000 ]);
$heap->insert(['Jeff Bezos' => 197500000000 ]);
$heap->insert(['Larry Ellison' => 74300000000 ]);
$heap->insert(['Larry Page' => 70600000000 ]);
$heap->insert(['Mark Zuckerberg' => 99700000000 ]);
$heap->insert(['Mukesh Ambani' => 78400000000 ]);
$heap->insert(['Steve Ballmer' => 72800000000 ]);
$heap->insert(['Warren Buffet' => 80300000000 ]);

// For displaying the ranking we move up to the first node
$total = 0;
$heap->top();

// Then we iterate through each node for displaying the result
echo str_repeat('-', 44) . "\n";
printf("%20s\t%20s\n", 'Name', 'Net Worth');
echo str_repeat('-', 44) . "\n";
while ($heap->valid()) {
	$iter = new ArrayIterator($heap->current());
	printf("%20s\t%20s\n", $iter->key(), number_format($iter->current()));
	$total += (int) $iter->current();
	$heap->next();
}
echo str_repeat('-', 44) . "\n";
	printf("%20s\t%20s\n", '', number_format($total));
echo str_repeat('-', 44) . "\n";
