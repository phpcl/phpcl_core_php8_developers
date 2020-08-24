<?php
// core_oop_expr_new.php
class Base
{
	public array $data;
	public function __construct($data = []) 
	{
		$this->data = $data;
	}
}
class JsonResponse extends Base
{
	public function render()
	{
		header('Content-Type: application/json');
		return json_encode($this->data);
	}
}
class TextResponse extends Base
{
	public function render()
	{
		header('Content-Type: text/html');
		return var_export($this->data, TRUE);
	}
}

// grab CLI param + init vars
$accept = $argv[1] ?? 'text';
$data = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
$strategies = ['text' => 'TextResponse','json' => 'JsonResponse'];

// note use of expression with "new"
$response = new ($strategies[$accept] ?? 'JsonResponse')($data);
echo $response->render();
echo "\n";
