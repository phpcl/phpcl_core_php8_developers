<?php
// core_cool_weak_map.php

// initialize two "expensive" objects
$expensive1 = new ArrayObject(range('A','F'));
$expensive2 = new ArrayObject(range('A','F'));

// store with SplObjectStorage
echo "\nSplObjectStorage Before:\n";
$storage = new SplObjectStorage();
$storage->offsetSet($expensive1, 111);
var_dump($storage);

// the object is not unset as a reference exists 
unset($expensive1);
echo "\nSplObjectStorage After:\n";
var_dump($storage);

// store with WeakMap
echo "\nWeakMap Before:\n";
$weakmap = new WeakMap();
$weakmap->offsetSet($expensive2, 222);
var_dump($weakmap);

// the object is allow to go away as only a weak reference exists 
unset($expensive2);
echo "\nWeakMap After:\n";
var_dump($weakmap);
