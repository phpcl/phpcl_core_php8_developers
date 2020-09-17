<?php
// core_lab_proc_diffs.php
ini_set('display_errors', 0);
define('SRC_DIR', __DIR__ . '/../labs/proc_diffs');
define('ERR_AGE', 'Invalid Age');
define('ERR_ZERO', 'Zero');

// validate staff
$data = include SRC_DIR . '/staff.php';
foreach ($data as $key => $row) {
        $err = '';
        if (!is_numeric($row{2})) {
                $err  = ERR_AGE;
        }
        if ($row{2} == 0) {
                $err .= ' ' . ERR_ZERO;
        }
        $row[] = trim($err);
        $row{2} = $row{2} + 1;
        $data[$key] = $row;
}

// list employees
echo "\nCEO: {$data[0][1]}\n";
echo "ID\tName\tAge\tTitle\tErrors\n";
foreach ($data as $row) {
        echo implode($row, "\t") . "\n\t";
        echo $row[2] + 10 . " is his/her age in 10 years\n";
}
