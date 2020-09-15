<?php
// core_imp_get_debug.php
class SomethingElse
{
	public $test = __CLASS__;
}
class Test
{
	public function getArray($obj)
	{
		if (!($obj instanceof ArrayObject)) {
			if (function_exists('get_debug_type')) {
				$msg = 'Expected ' . ArrayObject::class
					 . ' got ' . get_debug_type($obj) . ' instead';
			} else {
				$type = (is_object($obj)) ? get_class($obj) : gettype($obj);
				$msg = 'Expected ' . ArrayObject::class
					 . ' got ' . $type . ' instead';

			}
			throw new TypeError($msg);
		}
		return $obj->getArrayCopy();
	}
	public function render($obj)
	{
		try {
			$msg = 'SUCCESS: ' . var_export($this->getArray($obj), TRUE);
		} catch (TypeError $t) {
			$msg = 'ERROR: ' . $t->getMessage();
		}
		return $msg . "\n";
	}
}
$test = new Test();
echo $test->render([1,2,3]);
echo $test->render(new SomethingElse());
