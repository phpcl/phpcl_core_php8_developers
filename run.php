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
    try {
        $th = substr(shell_exec($cmdTh), 0, 9);
        $td = shell_exec($cmdTd);
    } catch (Throwable $t) {
        $td = get_class($t) . ':' . $t->getMessage();
    }
    $escaped = htmlspecialchars($td);
    return <<<EOT
  <section id="contact">
    <div class="container">
		<div class="row">
		<div class="col-md-2"><b>PHP $th Output</b></div>
		<div class="col-md-5"><b>Raw Output</b><br><pre>$td</pre></div>
		<div class="col-md-5"><b>Escaped Output</b><br><pre>$escaped</pre></div>
		</div>
    </div>
  </section>
EOT;
}

$runFile  = (isset($_GET['file'])) ? basename($_GET['file']) : '';
$fullName = str_replace('//', '/', __DIR__ . '/' . EXAMPLES . '/' . $runFile);
$output   = '';
if (file_exists($fullName)) {
    $code = highlight_file($fullName, TRUE);
	$output .= <<<EOT
  <section id="services" class="bg-light">
    <div class="container">
	  <h2>Executed File</h2>
	  $code
    </div>
  </section>
EOT;
	$output .= execPhp7($fullName);
	$output .= execPhp8($fullName);
}
include __DIR__ . '/index.php';
