<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 4);
define('FORMAT', '<div class="col-md-3"><a href="run.php?file=%s">%s</a></div>' . PHP_EOL);
// init vars
$flag = TRUE;
$path = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$list = new ArrayIterator(glob($path . '/*.php'));
// output file list
if (empty($output)) $output = '';
if (empty($message)) $message = '';
include __DIR__ . '/home.phtml';
