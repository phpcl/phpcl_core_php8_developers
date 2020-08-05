<?php
// core_oop_diffs_static_call_not.php
class Test {
	const TEST = 'TEST';
	public function notStatic()
	{
		return self::TEST;
	}
}
echo Test::notStatic();
