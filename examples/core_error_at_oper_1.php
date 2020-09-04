<?php
// core_error_at_oper_1.phpset
function bad()
{
	trigger_error(__FUNCTION__, E_USER_ERROR);
}
// "@" operator no longer masks fatal errors in PHP 8
echo @bad();
