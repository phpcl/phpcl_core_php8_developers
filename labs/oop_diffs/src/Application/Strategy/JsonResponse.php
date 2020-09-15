<?php
namespace Application\ Strategy;
class JsonResponse
{
	use VersionTrait;
	const VERSION = '1.0';
	protected $internal = [];
	public function __set($key, $value) 
	{
		$this->internal[$key] = $value;
	}
	public function __get($key) : string
	{
		$json = $this->internal[$key] ?? [];
		return json_encode($json);
		
	}
	public function version() : string
	{
		return self::VERSION;
	}
}
