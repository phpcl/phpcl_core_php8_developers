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
$output  = '<table width="100%">' . PHP_EOL;
$message = '<a href="?refresh=1">Refresh Source Code</a><br>';
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
// refresh repo?
$refresh = $_GET['refresh'] ?? 0;
if ((bool) $refresh) {
	chdir(REPO);
	$message .= '<pre>' . shell_exec('git pull') . '</pre>' . PHP_EOL;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP-CL Core: PHP 8 for Developers</title>
<style>
	tr {
		font-weight: bold;
		border: 1px solid gray;
		font-family: Arial, Helvetica, sans-serif;
	}
	td {
		border: 1px solid gray;
		font-family: Arial, Helvetica, sans-serif;
	}
	h1 {
		font-family: Arial, Helvetica, sans-serif;
	}
</style>
</head>
<body>
<h1>PHP-CL Core: PHP 8 for Developers</h1>
<table width="80%">
<tr>
<td width="30%"><?= $message; ?></td>
<td width="5%">&nbsp;</td>
<td width="65%"><?= $output; ?></td>
</tr>
</table>
</body>
</html>
