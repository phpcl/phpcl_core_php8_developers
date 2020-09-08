<?php
// core_proc_func_overload.php

// to enable function overloading, first run `/enable_overload.php`
// or select `php.ini::+Overload` from the menu

$str  = 'วันนี้สบายดีไหม';
$len1 = strlen($str);
$len2 = mb_strlen($str);
echo "Length of '$str' using 'strlen()' is $len1\n";
echo "Length of '$str' using 'mb_strlen()' is $len2\n";
