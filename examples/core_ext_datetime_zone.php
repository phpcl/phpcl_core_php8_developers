<?php
// core_ext_datetime_zone.php

date_default_timezone_set('America/New_York');

// forward clock changes
$date[] = new DateTime('2021-03-14 01:30:00');
$date[] = new DateTime('2021-03-14 02:30:00');
$date[] = new DateTime('2021-03-14 03:30:00');

// backwards clock changes
$date[] = new DateTime('2021-11-07 01:30:00');

try {
	$date[] = new DateTime('2021-11-07 01:30:00 ST');
	$date[] = new DateTime('2021-11-07 01:30:00 DST');
} catch (Throwable $t) {
	echo get_class($t) . ':' . $t->getMessage();
	echo "\n";
}

foreach ($date as $obj)
    echo $obj->format('Y-m-d H:i:s T') . "\n";

