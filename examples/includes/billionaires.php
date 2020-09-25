<?php
// includes/billionaires.php
// Taken from https://www.forbes.com/real-time-billionaires/
function showHeader($label)
{
	$output = "\n-------------------------------------------\n";
	$output .= "Using $label\n";
	$output .= "-------------------------------------------\n";
	$output .= sprintf("%20s | %20s\n", 'Name', 'Net Worth');
	$output .= sprintf("%20s | %20s\n", str_repeat('-', 20), str_repeat('-', 20));
	return $output;
}

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

return $billionaires;
