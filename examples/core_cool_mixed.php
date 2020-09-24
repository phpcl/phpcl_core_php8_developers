<?php
// core_cool_mixed.php

function old_style($a)
{
	return $a;
}

function new_style(mixed $a) : mixed
{
	return $a;
}

$reflect[] = new ReflectionFunction('old_style');
$reflect[] = new ReflectionFunction('new_style');

foreach ($reflect as $item) echo $item . "\n";

