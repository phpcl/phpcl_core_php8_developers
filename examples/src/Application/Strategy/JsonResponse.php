<?php
namespace Application\Strategy;
class JsonResponse extends Base
{
	public function render()
	{
		header('Content-Type: application/json');
		return json_encode($this->data);
	}
}
