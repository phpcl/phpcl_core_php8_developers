<?php
// core_cool_attr_misc.php
// TODO: get this working
use Ascmvc\Session\Http;
@@Http
class Test
{
	@@var("int")
	protected $id = 0;
	@@var(<<Http>>)
	protected $request = NULL;
	<<id('int'),Http('request')>>
	public function __construct(int $id, <<Http>> $request)
	{
		$this->id = $id;
		$this->request = $request;
	}
	@@return("int", "id")
	public function getId()
	{
		return $this->id;
	}
}
$test = new Test();
echo 'ID: ' . $test->getId() . PHP_EOL;
var_dump($test);
