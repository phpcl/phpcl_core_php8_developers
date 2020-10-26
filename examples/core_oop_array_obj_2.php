<?php
// core_oop_array_obj_2.php
class Test extends ArrayObject
{
    public $id = 12345;
    public $name = 'Andrew Caya';
    public function getVars()
    {
        return get_object_vars($this);
    }
}
$test = new Test(['A' => 1,'B' => 2,'C' => 3]);
var_dump($test->getVars());
var_dump($test->getArrayCopy());
var_dump($test);
