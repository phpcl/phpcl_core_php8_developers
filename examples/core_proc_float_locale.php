<?php
// core_proc_float_locale.php
$list = ['en_GB', 'fr_FR', 'de_DE'];
$patt = '%15s | %15s ' . PHP_EOL;
foreach ($list as $locale) {
	if (setlocale(LC_ALL, $locale)) {
		echo "Locale          : $locale\n";
		$f = 123456.789;
		echo "Original        : ",$f,"\n";
		$s = (string) $f;
		echo "Float to String : ",$s,"\n";
		$r = (float) $s;
		echo "String to Float : ",$r,"\n";
	} else {
		echo "\nLocale Functionality Not Available\n";
	}
}
