<?php
// core_ext_gd.php

$fn  = __DIR__ . '/includes/doug.jpg';
$new = __DIR__ . '/includes/test.png';
$fnt = __DIR__ . '/includes/OpenSans-Bold.ttf';
$img = imagecreatefromjpeg($fn);
$txt = (is_resource($img))
         ? 'Resource'
         : get_class($img);

// write the image type across top left
$blk = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
imagefttext($img, 32, 45, 85, 166, $blk, $fnt, $txt);
imagepng($img, fopen($new, 'w'));
$tag = '<img src="/examples/includes/test.png" />';
$msg = var_export(gd_info());
echo '</pre>' . $tag . '<pre>' . $msg;
