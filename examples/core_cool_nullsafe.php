<?php
// core_cool_nullsafe.php

// set up autoloader
include __DIR__ . '/src/Loader.php';
$loader = new Loader(__DIR__ . '/src');

use Application\Entity\Event;
$event_key = 'DOG-LOV-RC-885';
$dsn = 'mysql:host=localhost;dbname=phpcl';
$pdo = new PDO($dsn, 'phpcl', 'password');

// event exists
$event = new Event($pdo, $event_key);
echo 'Event:' . $event->getProp('event_name') . PHP_EOL;
echo 'Hotel:' . $event->getHotel()->getProp('hotelName');
echo "\n";

// event does not exist
$event = new Event($pdo, 'BAD-KEY');
echo 'Event:' . $event?->getProp('event_name') . PHP_EOL;
echo 'Hotel: ' . $event?->getHotel()?->getProp('hotelName');
echo "\n";

