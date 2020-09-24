<?php
// core_proc_num_str_bc_breaks.php
// using `is_numeric()` to validate form data
$age = '77  ';
echo (is_numeric($age)) 
     ? "Age is $age\n"
     : "Age must be a number\n";

// manipulating a number extracted from HTML
$tag = '<div style="width:999px;">';
preg_match('/width\:(.*?)\;/', $tag, $matches);
$width = (int) (1.5 * $matches[1]);
echo "Width is increased 50%. New width: $width\n";
