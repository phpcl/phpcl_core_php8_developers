<?php
// core_cool_typed_props1.php
class User {
     protected $id;
     protected $name;
     public function setId(int $id) {
         $this->id = $id;
     }
     public function setName(string $name) {
         $this->name = $name;
     }
     // etc.
}

try {
	$old = new User();
	$old->setId('ABC');
	var_dump($old);
} catch (Error $e) {
    echo "\nType hinting will catch type errors:\n";
    echo $e->getMessage() . "\n";
}
