<?php
// core_ext_mb_strrpos.php

$str    = 'ฉันเห็นผู้หญิงไทยสวย 2 คน';
$needle = 'ส';
$pos    = mb_strrpos($str, $needle, 'UTF-8');
echo "Original: $str\n";
echo "The character '$needle' is in the $pos position\n";
