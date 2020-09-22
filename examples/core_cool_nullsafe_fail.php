<?php
// core_cool_nullsafe_fail.php
// demonstrates short circuiting

$arr1 = array_combine(range('A','F'), range(111,700,111));
$arrobj = new ArrayObject($arr1);
$anon = new class ($arr1) {
	public $prop;
	public function __construct($arr1)
	{
		$this->prop = new stdClass();
		$this->prop->arr1 = $arr1;
	}
};
$arr2 = [ $arr1, $arrobj, $anon ];
