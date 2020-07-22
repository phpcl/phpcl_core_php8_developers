<?php
define('REPO', '/srv/repo');
chdir(REPO);
$message = 'Repo refresh status: <br>'
		 . '<pre>' . shell_exec('git stash') . '</pre>' . PHP_EOL;
		 . '<pre>' . shell_exec('git pull') . '</pre>' . PHP_EOL;
include __DIR__ . '/index.php';
