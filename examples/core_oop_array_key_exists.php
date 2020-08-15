<?php
// core_oop_array_key_exists.php
$obj = new class () {
	public $var = 'OK';
};
$default = 'DEFAULT';
echo "\nisset(): ";
echo (isset($obj->var)) ? $obj->var : $default;
echo "\nproperty_exists(): ";
echo (property_exists($obj,'var')) ? $obj->var : $default;
echo "\narray_key_exists(): ";
echo (array_key_exists('var',$obj)) ? $obj->var : $default;

