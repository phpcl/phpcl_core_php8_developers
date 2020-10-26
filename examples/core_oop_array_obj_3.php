<?php
// core_oop_array_obj_3.php
$obj = new ArrayObject(['A','B','C']);
echo "Using reset(), current() and next()\n";
reset($obj);
while ($item = current($obj)) {
    echo $item . ' ';
    next($obj);
}

echo "\nUsing ArrayIterator methods\n";
$it = $obj->getIterator();
while ($item = $it->current()) {
	echo $item . ' ';
	$it->next();
}
