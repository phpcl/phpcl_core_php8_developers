<?php
// core_oop_spl_autoload.php
function __autoload($class)
{
	$fn = __DIR__ . '/src/'
		. str_replace('\\', '/', $class)
		. '.php';
	require_once $fn;
}

$data    = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
$response = new \Application\Strategy\JsonResponse($data);
echo $response->render();
echo "\n";
