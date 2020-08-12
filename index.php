<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 4);
define('FORMAT', '<div class="col-md-3"><a href="run.php?file=%s">%s</a></div>' . PHP_EOL);
// init vars
$flag     = TRUE;
$path     = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$examples = new ArrayIterator(glob($path . '/*.php'));
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
