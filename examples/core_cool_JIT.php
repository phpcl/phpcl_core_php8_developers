<?php
// core_cool_JIT.php
// uses Mandelbrot implementation seen here:
// https://gist.github.com/dstogov/12323ad13d3240aee8f1

include __DIR__ . '/includes/Mandelbrot.php';
ob_start();
$m = new Mandelbrot();
ob_end_flush();
