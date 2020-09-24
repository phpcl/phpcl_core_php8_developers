<?php
class Response
{
	protected $data;
	public function response($data = []) 
	{
		$this->data = $data;
	}
	public function render()
	{
		header('Content-Type: application/json');
		return json_encode($this->data);
	}
}
