<?php
// core_cool_typed_props2.php
class NewUser {
     public int $id;
     public string $name;
}

// property typing will catch type errors
try {
    $new = new NewUser();
    $new->id = 'ABC';
    var_dump($new);
} catch (Error $e) {
    echo "\nProperty typing will catch type errors:\n";
    echo $e->getMessage() . "\n";
}
