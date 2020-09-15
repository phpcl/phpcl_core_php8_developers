<?php
namespace Application\Strategy;
class JsonResponse
{
	public function jsonresponse($data = []) 
	{
		$this->data = $data;
	}
	public function render()
	{
		header('Content-Type: application/json');
		return json_encode($this->data);
	}
}
