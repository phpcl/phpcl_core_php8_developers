<?php
// core_ext_intl_format.php

$today = new DateTime('now');
$pattern = [
	IntlDateFormatter::NONE, 
	IntlDateFormatter::SHORT, 
	IntlDateFormatter::MEDIUM, 
	IntlDateFormatter::LONG, 
	IntlDateFormatter::FULL,
];
foreach ($pattern as $format) {
	echo IntlDateFormatter::formatObject($today, $format);
	echo "\n";
}
if (PHP_VERSION[0] == '8') {
	$pattern = include __DIR__ . '/includes/intl_date_formatter.php';
	foreach ($pattern as $format) {
		echo IntlDateFormatter::formatObject($today, $format);
		echo "\n";
	}
}
