<?php
// core_ext_reflection_signature.php

// works in PHP 7
function f1($a, $b, $c) { return "$a $b $c"; }
$function = new ReflectionFunction('f1');
echo $function->invoke('Works','in','PHP 7');
echo "\n";

// works in PHP 7 and 8
function f2(...$a) { return implode(' ', $a); }
$function = new ReflectionFunction('f2');
echo $function->invoke('Works','in','PHP',7,'and',8);
echo "\n";

// works in PHP 7 and 8
function f3($a = NULL, ...$b)
{
    return $a . ' ' . implode(' ', $b);
}
$function = new ReflectionFunction('f3');
echo $function->invoke('Works','in','PHP',7,'and',8);
echo "\n";
