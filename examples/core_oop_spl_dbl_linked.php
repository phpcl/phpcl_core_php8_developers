<?php
// core_oop_spl_dbl_linked.php
function iterateList($double)
{
	$double->rewind();
	while ($item = $double->current()) {
		echo $item . '. ';
		$double->next();
	}
}

$error = 'ERROR: unable to build linked list';
$item = ['Person', 'Woman', 'Man', 'Camera', 'TV'];
$double = new SplDoublyLinkedList();
$forward = SplDoublyLinkedList::IT_MODE_FIFO | SplDoublyLinkedList::IT_MODE_KEEP;
$reverse = SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_KEEP;
try {
	foreach ($item as $key => $value)
		if (!$double->push($value))
			throw new Exception($error);
	echo "********** Forwards ***********\n";
	$double->setIteratorMode($forward);
	iterateList($double);
	echo "\n********** Backwards **********\n";
	$double->setIteratorMode($reverse);
	iterateList($double);
} catch (Throwable $t) {
	echo $t;
}
