<?php
// core_cool_match_coerce.php
$result = match ('test') {
    0 => 'case 0',
    'test' => 'case test'
};
echo "Result from match: $result\n";
