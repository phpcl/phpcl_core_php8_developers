<?php
// core_ext_gd.php

$fn  = __DIR__ . '/includes/doug.jpg';
$img = imagecreatefromjpeg($fn);
if (is_resource($img)) {
	echo $img;
} elseif (is_object($img)) {
	echo get_class($img);
}
echo "\n";
