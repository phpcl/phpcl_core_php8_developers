<?php
// core_oop_anonymous_class.php
interface Test {
    public function test();
}
$a[] = new class() { public $test = 'TEST'; };
$a[] = new class() extends ArrayObject { public $test = 'TEST'; };
$a[] = new class() implements Countable { 
    public function count() { return 1; } 
};
$a[] = new class() implements Countable, Test { 
	public function count() { return 1; } 
	public function test() { return 'TEST'; }
};
$a[] = new class() extends ArrayObject implements Test { 
        public function test() { return 'TEST'; }
};
var_dump($a);
