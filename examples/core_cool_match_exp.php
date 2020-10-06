<?php
// core_cool_match_exp.php
			
function math_old($a, $b, $op)
{
	switch ($op) {
		case '+' :
			$result = $a + $b;
			break;
		case '-' :
			$result = $a - $b;
			break;
		case '*' :
			$result = $a * $b;
			break;
		case '/' :
			$result = $a / $b;
			break;
		default :
			$result = 0;
	}
	return $result;
}
echo "Using switch\n";
echo math_old(2, 2, '+');
		
// exactly the same thing using `match` expression:

echo "\nUsing match expression\n";

function math_new($a, $b, $op)
{
	return match ($op) {
		'+' => $a + $b,
		'-' => $a - $b,
		'*' => $a * $b,
		'/' => $a / $b,
		'default' => 0
	};
}
echo math_new(2, 2, '+');
echo "\n";

