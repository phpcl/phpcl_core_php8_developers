<?php
// core_cool_nullsafe_fail.php
// demonstrates short circuiting

$arr1 = array_combine(range('A','F'), range(111,700,111));
$arrObj = new ArrayObject($arr1);
$arr2 = ['A' => $arrObj, 'B' => NULL];
$anon = new class ($arr2) {
        public $prop;
        public function __construct($arr)
        {
                $this->prop = new stdClass();
                $this->prop->arr = $arr;
        }
};
$arr3 = ['anon' => $anon ];
echo $arr3['anon']->prop->arr['A']['A'];
echo "\n";
echo $arr3['anon']?->prop->arr['B']['A'] ?? 'DEFAULT';
echo "\n";
