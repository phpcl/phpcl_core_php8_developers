<?php
// constants
define('EXAMPLES', 'examples');
define('COLS', 4);
// init vars
$flag    = TRUE;
$format  = '<td><a href="run.php?file=%s">%s</a></td>';
$path    = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$list    = new ArrayIterator(glob($path . '/*.php'));
// output file list
if (empty($output)) $output = '';
if (empty($message)) $message = '';
$output  .= '<table width="100%">' . PHP_EOL;
while ($flag) {
    $output .= '<tr>' . PHP_EOL;
    for ($x = 0; $x < COLS; $x++) {
		if ($list->valid()) {
			$name = basename($list->current());
			$list->next();
			$output .= sprintf($format, $name, $name);
		} else {
			$flag = FALSE;
			$output .= '<td>&nbsp;</td>';
		}
		$output .= PHP_EOL;
	}
	$output .= '</tr>' . PHP_EOL;
}
$output .= '</table>' . PHP_EOL;
include __DIR__ . '/home.phtml';
