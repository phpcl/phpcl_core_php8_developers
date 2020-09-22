<?php
// core_proc_parse_url.php
$data = [
	'https://lms.php-cl.com/course/view.php?id=125',
	'https://continuous-learning.com/how-to-use-linux-for-composer-to-deploy-to-the-cloud/#more-443',
	'https://php-cl.com/courses',
	'https://php-cl.com/courses?',
	'https://php-cl.com/courses?#'
];
foreach ($data as $url) {
	echo "<b>$url</b>\n";
	var_dump(parse_url($url));
}
