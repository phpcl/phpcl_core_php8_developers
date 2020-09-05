<?php
// core_proc_parse_url.php
$data = [
	'https://lms.php-cl.com/course/view.php?id=125',
	'https://continuous-learning.com/how-to-use-linux-for-composer-to-deploy-to-the-cloud/#more-443',
	'https://php-cl.com/courses',
	'https://php-cl.com/courses?',
	'https://php-cl.com/courses?#'
];
var_dump(parse_url($data[0]));
var_dump(parse_url($data[1]));
foreach ($data as $url) {
	echo "<b>$url</b>\n";
	$parsed = parse_url($url);
	if (!isset($parsed['query'])) {
		echo "Query missing\n";
	}
	if (!isset($parsed['fragment'])) {
		echo "Fragment missing\n";
	}
}
