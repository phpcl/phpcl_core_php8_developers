<?php
// constants
define('TEMPLATE_DIR', __DIR__ . '/templates');
define('DEFAULT_SUFFIX', 'template');
define('KEY_DELIM', '%%');
define('SUFFIX',    '--suffix');
define('NO_PROMPT', '--no-prompt');
define('PWD_KEYS',  '--pwd-keys');

// init vars
$usage = 'Usage: php generate_creds.php <CREDS_JSON_FILE> <TEMPLATES_DIR> [' . SUFFIX . '="template"] [' . PWD_KEYS . '="xxx,yyy"] [' . NO_PROMPT . ']' . "\n"
       . '       ' . SUFFIX . ' is the file extension used for template files' . "\n"
       . '       ' . PWD_KEYS . ' is a comma separated list of security_creds.json file keys that need a random key assigned' . "\n"
       . '       if the ' . NO_PROMPT . '" flag is present, will operate automatically without confirming values' . "\n"
       . '       NOTES: (1) template suffix defaults to ".dist"' . "\n"
       . '              (2) keys inside template files must be ' 
       . KEY_DELIM . 'wrapped' . KEY_DELIM . ' with this delimiter:"' . KEY_DELIM . '"' . "\n";
$creds = [];	// will write out to security_creds.json

// access CLI params
$allArgs  = implode(' ', $argv);
$credFile = $argv[1] ?? SEC_CREDS;
$templDir = $argv[2] ?? TEMPLATE_DIR;
$keyDelim = KEY_DELIM;
$noPrompt = (bool) strpos($allArgs, NO_PROMPT);

// check for argv errors
if (!$credFile) {
	echo "You need to provide a security credentials JSON file\n";
	exit($usage);
} elseif (!file_exists($templDir)) {
	echo "Unable to find template files\n";
	exit($usage);
}

// determine template suffix
if (preg_match('/' . SUFFIX . '=(.*?)/', $allArgs, $matches)) {
	$suffix = $matches[1] ?? DEFAULT_SUFFIX;
	$suffix = trim($suffix, '"\'');
	if (strpos($suffix, '.') === 0) {
		$suffix .= substr($suffix, 1);
	}
}

// determine password keys
if (preg_match('/' . PWD_KEYS . '=(.*?)/', $allArgs, $matches)) {
	$pwdKeys = $matches[1] ?? '';
	$pwdKeys = trim($pwdKeys, '"\'');
}

foreach ($creds as $fn => $items) {
	$template = str_replace('//', '/', $templDir . '/' . $fn . $suffix);
	if (!file_exists($template)) {
		echo "Unable to find $template\n";
		exit($usage);
	}
}

// read security creds JSON file contents
try {
	$creds = json_decode(file_get_contents($credFile), TRUE, 512, JSON_THROW_ON_ERROR);
} catch (Throwable $t) {
	echo get_class($t) . ':' . $t->getMessage() . "\n";
	exit($usage);
}

// generate new passwords if that key is present
if ($pwdKeys) {
	$list = explode(',', $pwdKeys);
	$pwdKeys = [];
	foreach ($list as $key) {
		$pwdKeys[$key] = bin2hex(random_bytes(8));
	}
}

// confirm cred info
if (!$noPrompt) {
	foreach ($creds as $fn => $items) {
		echo "Confirming Creds for $fn\n";
		foreach ($items as $key => $value) {
			$prompt = $key . ' [' . $value . "] : \n";
			$temp = readline($prompt);
			if ($temp) $creds[$fn][$key] = $temp;
		}
	}
}

// write out changes to other files
foreach ($creds as $fn => $items) {
	echo "\n****************************************\n";
	echo "Processing $fn\n";
	$template = str_replace('//', '/', $templDir . '/' . $fn . TEMPLATE_SUFFIX);
	$contents = file_get_contents($template);
	foreach($items as $key => $value) {
		// generate password if requested
		if (isset($pwdKeys[$key])) {
			$value = $pwdKeys[$key];
			$creds[$fn][$key] = $value;
		}
		$contents = str_replace(KEY_DELIM . $key . KEY_DELIM, $value, $contents);
	}
	file_put_contents($fn, $contents);
	readfile($fn);
	echo "\n";
}

// write out changes to security creds file
$backFn = str_replace('.','_',$credFile) . '_' . date('YmdHis') . '.bak';
copy($credFile, $backFn);
file_put_contents($credFile, json_encode($creds, JSON_PRETTY_PRINT));
echo "\nSecurity Credentials File:\n";
readfile($credFile);
