<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 4);
// init vars
$flag    = TRUE;
$format  = '<td><a href="run.php?file=%s">%s</a></td>';
$path    = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$list    = new ArrayIterator(glob($path . '/*.php'));
// output file list
if (empty($output)) $output = '';
if (empty($message)) $message = '';
$examples  = '<table width="100%">' . PHP_EOL;
while ($flag) {
    $examples .= '<tr>' . PHP_EOL;
    for ($x = 0; $x < COLS; $x++) {
		if ($list->valid()) {
			$name = basename($list->current());
			$list->next();
			$examples .= sprintf($format, $name, $name);
		} else {
			$flag = FALSE;
			$examples .= '<td>&nbsp;</td>';
		}
		$examples .= PHP_EOL;
	}
	$examples .= '</tr>' . PHP_EOL;
}
$examples .= '</table>' . PHP_EOL;
include __DIR__ . '/home.phtml';
