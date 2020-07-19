<?php
define('EXAMPLES', 'examples');
error_reporting(E_ALL);
ini_set('display_errors', 1);

function execPhp7($fullName)
{
    $cmdTh = 'php7 --version';
    $cmdTd = 'php7 ' . $fullName;
    return doExec($cmdTh, $cmdTd);
}

function execPhp8($fullName)
{
    $cmdTh = 'php8 --version';
    $cmdTd = 'php8 ' . $fullName;
    return doExec($cmdTh, $cmdTd);
}

function doExec($cmdTh, $cmdTd)
{
    $th = '<th style="width:50%;vertical-align:top;background-color:#6BCCEB;border-bottom:thin solid gray;">';
    $td = '<td style="width:50%;vertical-align:top;background-color:#E6F2F6;">';
    try {
        $th .= substr(shell_exec($cmdTh), 0, 9) . PHP_EOL;
        $td .= '<pre>' . shell_exec($cmdTd) . '</pre>' . PHP_EOL;
    } catch (Throwable $t) {
        $td .= get_class($t) . ':' . $t->getMessage();
    }
    $th .= '</th>' . PHP_EOL;
    $td .= '</td>' . PHP_EOL;
    return ['th' => $th, 'td' => $td];
}

$runFile  = $_GET['file'] ?? 'index.php';
$fullName = str_replace('//', '/', __DIR__ . '/' . EXAMPLES . '/' . $runFile);
$output = <<<EOT
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>PHP-CL Core: PHP 8 for Developers</title>
</head>
<body>
EOT;
$output .= '<a href="/">BACK</a><br><br>' . PHP_EOL;
$contents = [];
if (file_exists($fullName)) {
    $output .= '<table width="100%" style="border: thin solid black;">' . PHP_EOL;
    $output .= '<tr><td style="width:50%;vertical-align:top;border-right: thin solid black;">' . PHP_EOL;
    $output .= highlight_file($fullName, TRUE);
    $output .= '</td>' . PHP_EOL;
    // run script using PHP 7 and then 8
    $contents['php7'] = execPhp7($fullName);
    $contents['php8'] = execPhp8($fullName);
    $output .= '<td style="width:50%;vertical-align:top;">' . PHP_EOL;
    $output .= '<table width="100%" height:"100%">' . PHP_EOL;
    $output .= '<tr>' . $contents['php7']['th'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php7']['td'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php8']['th'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php8']['td'] . '</tr>' . PHP_EOL;
    $output .= '</table>' . PHP_EOL;
    $output .= '</td>' . PHP_EOL;
    $output .= '</tr></table>' . PHP_EOL;
    $output .= '</body></html>' . PHP_EOL;
} else {
    header('Location: /');
    exit;
}
echo $output;
echo PHP_EOL;
