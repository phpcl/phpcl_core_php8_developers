<?php
// core_lab_oop_diffs.php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
define('SRC_DIR', __DIR__ . '/oop_diffs/src');
$data = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
try {
	include SRC_DIR . '/Loader.php';
	$loader = new Loader(SRC_DIR);
	// need to specify the instance, not the classname
	// spl_autoload_register('Loader');
	spl_autoload_register($loader);
// in PHP 8 failure to register autoloader throws ERROR
} catch (Exception $e) {
	// __autoload() no longer supported, but keep this for backwards compatibility
	include SRC_DIR .'/autoload.php';
}
use Application\Strategy\JsonResponse;
$response = new JsonResponse();
$response->one = $data;
echo 'Version       : ' . $response::version();
echo "\nJSON Response : {$response->one}\n";
