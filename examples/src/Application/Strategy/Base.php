<?php
namespace Application\Strategy;
class Base
{
	public array $data;
	public function __construct($data = []) 
	{
		$this->data = $data;
	}
}
