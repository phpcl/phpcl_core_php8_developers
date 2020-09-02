<?php
// core_proc_filter_list.php
// RE: the "Filter" family: 
// https://www.php.net/manual/en/ref.filter.php
// Removed in PHP 8: "magic_quotes" (FILTER_SANITIZE_MAGIC_QUOTES)
// Added in PHP 8: "add_slashes" 
print_r(filter_list());
