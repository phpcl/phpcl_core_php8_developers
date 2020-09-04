<?php
// core_error_lsp_violation.php
class X {
	public function whatever(int $a) {
		return $a;
	}
}
class Y extends X {
	public function whatever(string $a) { 
		return strtolower($a); 
	}
}
