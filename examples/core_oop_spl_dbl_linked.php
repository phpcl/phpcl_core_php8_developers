<?php
// core_oop_spl_dbl_linked.php
$double = new class () extends SplDoublyLinkedList
{
    public function iterateList(int $mode)
    {
        $this->setIteratorMode($mode);
        $this->rewind();
        while ($item = $this->current()) {
            echo $item . '. ';
            $this->next();
        }
    }
};

$error = 'ERROR: unable to build linked list';
$item = ['Person', 'Woman', 'Man', 'Camera', 'TV'];
try {
    foreach ($item as $key => $value)
        if (!$double->push($value))
            throw new Exception($error);
    echo "********** Forwards ***********\n";
    $forward = SplDoublyLinkedList::IT_MODE_FIFO | SplDoublyLinkedList::IT_MODE_KEEP;
    $double->iterateList($forward);
    echo "\n********** Backwards **********\n";
    $reverse = SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_KEEP;
    $double->iterateList($reverse);
} catch (Throwable $t) {
    echo $t;
}
