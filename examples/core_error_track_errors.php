<?php
// core_error_track_errors.php
ini_set('track_errors', 1);
function bad()
{
	trigger_error('We Be Bad', );
}
echo @bad();
echo $php_errormsg;	
