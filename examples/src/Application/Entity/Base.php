<?php
// core_cool_nullsafe.php
namespace Application\Entity;
use PDO;
class Base
{
        const TABLE = '';
        const KEY = '';
        public $props = [];
        public $pdo = NULL;
        public function __construct(PDO $pdo, ?string $key)
        {
                $this->pdo = $pdo;
                $sql = 'SELECT * FROM ' . static::TABLE
                         . ' WHERE ' . static::KEY . '= ?';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$key]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->props = ($result) ? $result : NULL;

        }
        public function getProp($field)
        {
                return $this->props[$field] ?? NULL;
        }
}
