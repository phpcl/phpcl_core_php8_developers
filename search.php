<?php
$search = $_POST['searchterm'] ?? '';
$search = strip_tags($search);
$cmd    = 'grep -rn examples -e "' . $search . '"';
$message = '<pre>' . htmlspecialchars(shell_exec($cmd)) . '</pre>' . PHP_EOL;
include __DIR__ . '/index.php';
