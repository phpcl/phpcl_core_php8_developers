<?php
// core_cool_nullsafe.php
include __DIR__ . '/src/Loader.php';
$loader = new Loader(__DIR__);
use Application\Entity\Event;
$event_key = 'DOG-LOV-RC-885';
$dsn = 'mysql:host=localhost;dbname=phpcl';
$pdo = new PDO($dsn, 'phpcl', 'password');
$event = new Event($pdo, $event_key);
var_dump($event);
