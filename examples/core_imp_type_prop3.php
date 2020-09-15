<?php
// core_cool_typed_props3.php
class NewUser {
     public int $id;
     public string $name;
}
class Problem extends NewUser {
     public function setId(int $id)
     {
        // Property typing will prevent runtime changes
        $this->id = md5($id);
     }
}

$obj = new Problem();
$obj->setId(12345);
var_dump($obj);
