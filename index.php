<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 4);
// init vars
$flag    = TRUE;
$format  = '<a href="run.php?file=%s">%s</a>';
$path    = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$list    = new ArrayIterator(glob($path . '/*.php'));
// output file list
if (empty($output)) $output = '';
if (empty($message)) $message = '';
$examples = '';
while ($list->valid()) {
	$name = basename($list->current());
	$list->next();
	$examples .= str_pad(sprintf($format, $name, $name), 20);
}
include __DIR__ . '/home.phtml';
