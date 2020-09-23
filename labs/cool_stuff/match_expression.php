<?php
// match_expression.php
// Ref: https://fastspring.com/blog/how-to-format-30-currencies-from-countries-all-over-the-world/
function formatMoney(float $amount, string $currency)
{
	// rewrite using match expression
	$symbol = '';
	$before = TRUE;
	$decimal = '.';
	$thousands = ',';
	switch ($currency) {
		case 'AUD' :
		case 'BRL' :
		case 'CLP' :
		case 'COP' :
		case 'HKD' :
		case 'MXN' :
		case 'NZD' :
		case 'SGD' :
		case 'USD' :
			$symbol = '$';
			break;
		// Go Quebec! :-)
		case 'CAD' :
			$symbol = '$';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'EUR' :
			$symbol = '€';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'JPY' :
			$symbol = '¥';
			break;
		case 'GBP' :
			$symbol = '£';
			break;
		case 'CNY' :
			$symbol = '元';
			break;
		case 'INR' :
			$symbol = '₹';
			break;
		case 'RUB' :
			$symbol = '₽';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'TRY' :
			$symbol = '₺';
			break;
		case 'THB' :
			$symbol = '฿';
			break;
		case 'ILS' :
			$symbol = '₪';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'PLN' :
			$symbol = 'zł';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'PHP' :
			$symbol = '₱';
			break;
		case 'AED' :
			$symbol = 'د.إ';
			break;
		case 'SAR' :
			$symbol = '﷼';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'VND' :
			$symbol = '₫';
			$decimal = ',';
			$thousands = '.';
			$before = FALSE;
			break;
		case 'MYR' :
			$symbol = 'RM';
			break;
		default :
			$symbol = $currency;
	}
	$output = number_format($amlount, 2, $decimal, $thousands);
	if ($before) {
		$output = $symbol . ' ' . $output;
	} else {
		$output = $output . ' ' . $symbol;
	}
	return $output . "\n";
}
