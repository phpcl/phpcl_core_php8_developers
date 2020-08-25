<?php
namespace Application\Strategy;
class TextResponse extends Base
{
	public function render()
	{
		header('Content-Type: text/html');
		return var_export($this->data, TRUE);
	}
}
