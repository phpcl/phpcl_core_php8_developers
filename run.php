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
        $th = substr(shell_exec($cmdTh), 0, 9) . PHP_EOL;
        $td = '<pre>' . shell_exec($cmdTd) . '</pre>' . PHP_EOL;
    } catch (Throwable $t) {
        $td = get_class($t) . ':' . $t->getMessage();
    }
    return ['th' => $th, 'td' => $td];
}

$runFile  = (isset($_GET['file'])) ? basename($_GET['file']) : '';
$fullName = str_replace('//', '/', __DIR__ . '/' . EXAMPLES . '/' . $runFile);
$output   = '';
if (file_exists($fullName)) {
    $code = highlight_file($fullName, TRUE);
    $php7 = execPhp7($fullName);
    $php8 = execPhp8($fullName);
	$output .= <<<EOT
   <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Executed File</h2>
          $code
        </div>
      </div>
    </div>
  </section>
EOT;
  $output .= <<<EOT
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>PHP 7 Output</h2>
          $php7
        </div>
      </div>
    </div>
  </section>
EOT;
	$output .= <<<EOT
   <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>PHP 8 Output</h2>
          $php8
        </div>
      </div>
    </div>
  </section>
EOT;

}
include __DIR__ . '/index.php';
