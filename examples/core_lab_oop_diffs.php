<?php
// core_lab_oop_diffs.php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
define('SRC_DIR', __DIR__ . '/../labs/oop_diffs/src');
$autoload = function ($class) {
	$fn = SRC_DIR . '/'
		. str_replace('\\', '/', $class)
		. '.php';
	require_once $fn;
};
$data = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
try {
	spl_autoload_register('autoload', TRUE);
} catch (Exception $e) {
	include SRC_DIR . '/Loader.php';
}
$response = new Response($data);
echo 'JSON Response: ' . $response->render();

