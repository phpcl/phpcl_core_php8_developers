<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 3);
define('FORMAT', '<div class="col-md-4"><a href="run.php?file=%s">%s</a></div>' . PHP_EOL);
// init vars
$flag = TRUE;
$list = [];
$path = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
// output file list
if (empty($message)) $message = '';
if (empty($output)) {
	$output = '';
	$list = new ArrayIterator(glob($path . '/*.php'));
}
include __DIR__ . '/home.phtml';
