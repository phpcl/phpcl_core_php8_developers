<?php
// core_cool_named_cookie.php
setcookie('test_not_named',1,0,0,'','',FALSE,TRUE);
setcookie('test_named',1,httponly: TRUE);
headers_list();

