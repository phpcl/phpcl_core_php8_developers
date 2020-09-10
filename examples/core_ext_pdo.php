<?php
// core_ext_pdo.php

class Hotel
{
	public $key;
	public $name;
	public function getInfo()
	{
		return "$name [$key]";
	}
}
$dsn = 'mysql:host=localhost;dbname=phpcl';
$usr = 'phpcl';
$pwd = 'password';
$pdo = new PDO($dsn, $usr, $pwd);
$sql = 'SELEK propertyKey, hotelName FUM hotels '
	 . "WARE country = 'CA'";
$stm = $pdo->query($sql);
if ($stm) {
	$stm->setFetchMode(PDO::FETCH_CLASS, 'Hotel');
	while($hotel = $stm->fetch()) {
		echo $hotel->getInfo();
		echo "\n";
	}
} else {
	echo "Database Error\n";
}
