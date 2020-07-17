<?php
define('REPO', '/srv/repo');
$refresh = $_GET['refresh'] ?? 0;
$list = glob(__DIR__ . '/*.php');
$output = '';
$message = '<a href="?refresh=1">Refresh Source Code</a><br>';
foreach ($list as $file) {
    $name = basename($file);
    $output .= '<br><a href="run.php?file=' . $name . '">' . $name . '</a>' . PHP_EOL;
}
if ((bool) $refresh) {
	chdir(REPO);
	$message .= '<pre>' . shell_exec('git pull') . '</pre>' . PHP_EOL;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP-CL Core: PHP 8 for Developers</title>
</head>
<body>
    <h1>PHP-CL Core: PHP 8 for Developers</h1>
    <table>
        <tr>
            <td width="33%"><?= $message; ?></td>
            <td width="67%"><?= $output; ?></td>
        </tr>
    </table>
</body>
</html>
