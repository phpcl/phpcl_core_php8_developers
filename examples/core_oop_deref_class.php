<?php
// core_oop_deref_class.php
class AAA
{
	public const AAA = 'AAA';
	public static $bbb = 'BBB';
	public static $ccc = 'CCC';
}
class CCC 
{
	public const DDD = 'DDD';
	public static $eee = 'EEE';
}
class EEE
{
	public const FFF = 'FFF';
}

echo AAA::$ccc::DDD;
