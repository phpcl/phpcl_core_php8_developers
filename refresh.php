<?php
$message = 'Repo refresh status: <br>'
		 . '<pre>' . shell_exec('git pull') . '</pre>' . PHP_EOL;
include __DIR__ . '/index.php';
