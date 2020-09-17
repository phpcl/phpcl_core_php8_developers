<?php
// core_lab_oop_diffs.php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
define('SRC_DIR', __DIR__ . '/../labs/oop_diffs/src');
$data = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
try {
	include SRC_DIR . '/Loader.php';
	$loader = new Loader(SRC_DIR);
	spl_autoload_register('Loader');
} catch (Exception $e) {
	include SRC_DIR .'/autoload.php';
}
use Application\Strategy\JsonResponse;
$response = new JsonResponse();
$response->one = $data;
echo 'Version       : ' . $response::version();
echo "\nJSON Response : {$response->one}\n";
