<?php
// core_cool_nullsafe.php
namespace Application\Entity;
class Base
{
	const TABLE = '';
	const KEY = '';
	public $props = [];
	public function __construct(PDO $pdo, string $key)
	{
		$sql = 'SELECT * FROM ' . TABLE
			 . ' WHERE ' . static::KEY '=?';
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$key]);
		$this->props = $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function getProp($field)
	{
		return $this->props[$field] ?? NULL;
	}
}
