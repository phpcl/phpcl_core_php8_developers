<?php
// core_ext_datetimeinterface.php

$dt[] = $obj = new DateTime('now');
$dt[] = $imm = new DateTimeImmutable('now');
$dt[] = DateTime::createFromImmutable($imm);

try {
	$dt[] = DateTimeImmutable::createFromInterface($dt);
} catch (Throwable $t) {
	echo get_class($t) . ':' . $t->getMessage();
	echo "\n";
}
var_dump($dt);
