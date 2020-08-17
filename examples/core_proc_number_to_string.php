<?php
// core_procedural_number_to_string.php
$value = 0;
$string = 'ABC';
$mixed  = '42abc';
$array  = ['A','B','C'];

$result = ($value == $string) ? 'is the same as' : 'is not the same as';
echo 'The value "' . $value . '" ' . $result . ' "' . $string. "\"\n";

$result = (in_array($value, $array)) ? 'is in' : 'is not in';
echo 'The value "' . $value . '" ' . $result . "\n" . var_export($array, TRUE);

$result = ($mixed == 42) ? 'is the same as' : 'is not the same as';
echo "\n" . 'The value "' . $mixed . '" ' . $result . " 42\n";

