<?php
// core_cool_trait_private.php
trait Base
{
	private abstract function doEncrypt($text);
}
class PhpCL
{
	use Base;
	const METHOD = 'aes-256-ctr';
	public $supported = [];
	public $key = '';
	public $iv = '';
	public function __construct()
	{
		$this->key = bin2hex(random_bytes(16));
		$this->supported = openssl_get_cipher_methods();
	}
	public function encrypt($text)
	{
		return $this->doEncrypt($text);
	}
	private function doEncrypt($text)
	{
		$this->iv = substr(bin2hex(random_bytes(32)), 0, openssl_cipher_iv_length(self::METHOD));
		return openssl_encrypt($text, self::METHOD, $this->key, 0, $this->iv);
	}
}
$phpcl = new PhpCL();
$text  = 'This message contains highly sensitive information.';
echo 'Encrypted: ' . $phpcl->encrypt($text) . "\n";
echo 'Key: ' . $phpcl->key . "\n";
echo 'Salt: ' . $phpcl->iv . "\n";
echo "\n";
