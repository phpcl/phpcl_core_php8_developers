<?php
// core_ext_zip_archive.php

$zip = new ZipArchive();
$filename = __DIR__ . '/includes/empty.txt';

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
	$msg = 'ERROR opening archive';
} else {
	$msg = 'SUCCESS in opening archive';
}
echo $msg . "\n";
