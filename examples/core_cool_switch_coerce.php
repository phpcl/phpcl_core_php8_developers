<?php
// core_cool_switch_coerce.php
switch ('test') {
    case 0:
      $result = 'case 0';
      break;
    case 'test':
      $result = 'case test';
      break;
}
echo "Result from switch: $result\n";
include 'core_cool_match_coerce.php';
