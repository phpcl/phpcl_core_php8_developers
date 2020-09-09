<?php
// core_ext_mb_ereg.php

$str  = 'ฉันเห็นผู้หญิงไทยสวย 2 คน';
mb_regex_encoding('UTF-8');
$mod1 = mb_ereg_replace('2', '51', $str);
$mod2 = preg_replace('/2/u', 3, $str);
echo "Original: $str\n";
echo "Modified Using mb_ereg_replace: $mod1\n";
echo "Modified Using preg_replace   : $mod2\n";
