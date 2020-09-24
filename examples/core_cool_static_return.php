<?php
// core_cool_static_return.php

// autoloader
include __DIR__ . '/src/Loader.php';
use Application\Sql\Insert;
$loader = new Loader(__DIR__ . '/src');
$insert = new Insert();

echo $insert->into('images')
			->columns(['title','image'])
			->values(['Apple', '/images/dbierer/apple.png'])
			->render();
