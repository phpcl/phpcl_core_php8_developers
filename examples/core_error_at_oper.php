<?php
// core_error_at_oper.php
declare(strict_types=1);
function handler($err_no, $err_msg, $filename, $linenum) {
        if (error_reporting() == 0) {
                echo "Error was silenced\n";
                return; // Silenced
        }
}
set_error_handler('handler');
echo @file_get_contents('file_does_not_exist.txt');
