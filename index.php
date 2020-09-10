<?php
// constants
if (!defined('EXAMPLES')) define('EXAMPLES', 'examples');
define('COLS', 3);
define('SPACER', '<td>&nbsp;&nbsp;&nbsp;</td>');
define('FORMAT', '<td style="margin-right: 20px;"><a href="run.php?file=%s">%s</a></td>' . PHP_EOL);
// init vars
$flag = TRUE;
$iter = NULL;
$filt = NULL;
$path = str_replace('//', '/', __DIR__ . '/' . EXAMPLES);
$categories = [
	'cool' => 'Cool Stuff',
	'oop'  => 'OOP PHP',
	'proc' => 'Procedural PHP',
	'ext'  => 'PHP Extensions',
	'error' => 'Error Handling'
];
// output file list
if (empty($message)) $message = '';
if (empty($output)) {
	$output = '';
	$iter   = new ArrayIterator(glob($path . '/*.php'));
	$iter->asort();
	// create filter by category
	$filt = new class ($iter) extends FilterIterator {
		public $cat = 'cool';
		public function accept() : bool
		{
			$fn = parent::current();
			return (strpos($fn, $this->cat));
		}
	};
}
include __DIR__ . '/home.phtml';
