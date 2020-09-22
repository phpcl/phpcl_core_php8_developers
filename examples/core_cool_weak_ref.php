<?php
// core_cool_weak_ref.php
$obj1 = new ArrayObject([1,2,3]);
$obj2 = $obj1;
$obj3 = new ArrayObject(['A','B','C']);

echo 'If we create a _weak reference_ to $obj` and then destroy it,' . PHP_EOL;
echo 'it doesn\'t go away because of `$obj2`:' . PHP_EOL;
$weakref = WeakReference::create($obj1);
var_dump($weakref->get());  // object exists
unset($obj1);
var_dump($weakref->get());  // object exists

echo "\n" . 'On the other hand, the weak reference to `$obj3` goes away after calling `unset()`' . "\n";
$weakref = WeakReference::create($obj3);
var_dump($weakref->get());  // object exists
unset($obj3);
var_dump($weakref->get());  // NULL
