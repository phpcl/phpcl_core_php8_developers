<?php
// core_oop_spl_register.php
$autoload = new class () {
	// should be:
	// public function __invoke($class)
	public function autoLoad($class)
	{
		$fn = __DIR__ . '/src/'
			. str_replace('\\', '/', $class)
			. '.php';
		require_once $fn;
	}
};
try {
	spl_autoload_register($autoload, TRUE);
	$data    = ['A' => [1,2,3],'B' => [4,5,6],'C' => [7,8,9]];
	$response = new \Application\Strategy\JsonResponse($data);
	echo $response->render();
} catch (Exception $e) {
	echo $e;
}
echo "\n";
