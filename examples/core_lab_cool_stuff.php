<?php
// core_lab_cool_stuff.php
declare(strict_types=1);

/**
 * INSTRUCTIONS:
 * For each task, uncomment the pertinent lines of code
 * Implement a solution
 * When done, move on to the next task
 */

ini_set('display_errors', 'on');
define('SRC_DIR', __DIR__ . '/../labs/cool_stuff');
define('MAX_PRIMES', 100000);

// Task 1: use new types to allow only int or float
/*
include SRC_DIR . '/union_types.php';
$math = new Math();
echo $math->add(123.456, 222);
*/


// Task 2: rewrite using variadic ops and named args
/*
include SRC_DIR . '/variadic_ops_and_named_args.php';
$web = new Web();
$web->makeCookie('test', 'TEST', time() + 300, '/', '.linuxforphp.com', TRUE, TRUE, 'Strict');
// Hit F12 on your browser and confirm the cookie settings
*/


// Task 3: rewrite using constructor argument promotion
/*
include SRC_DIR . '/const_arg_promo.php';
$name = new Name('Mr','Douglas','Alan','Bierer','I');
echo $name->getFullName();
*/


// Task 4: rewrite using match expression
/*
include SRC_DIR . '/match_expression.php';
echo formatMoney(1234567.89, 'CAD'); 
echo formatMoney(1234567.89, 'MXN');
echo formatMoney(1234567.89, 'EUR');
echo formatMoney(1234567.89, 'GBP'); 
echo formatMoney(1234567.89, 'CAD'); 
*/


// Task 5: use JIT to speed up the following:
/*
include SRC_DIR . '/generate_primes.php';
$generator = makePrime(MAX_PRIMES);
foreach ($generator as $num) {
	echo $num . ' ';
}
echo $generator->getReturn();
*/


