<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 3);
define('FORMAT', '<td style="margin-right: 20px;"><a href="run.php?file=%s">%s</a></td>' . PHP_EOL);
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
