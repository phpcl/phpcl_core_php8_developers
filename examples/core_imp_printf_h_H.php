<?php
// core_cool_printf_h_H.php
// TODO: get it working
$pi = 22/7;
// this works in both PHP 7 and 8
printf('%.14g %.14G' . PHP_EOL, $pi, $pi);

// this only works in PHP 8
$precision = (int) ini_get('precision') ?: -1;
printf('%.*g %.*G' . PHP_EOL, $precision, $pi, $pi);
printf('%.*h %.*H' . PHP_EOL, $precision, $pi, $pi);

