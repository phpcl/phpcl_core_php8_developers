<?php
// core_proc_data_wrapper.php
$dsn = 'mysql:host=localhost;dbname=phpcl';
$pdo = new PDO($dsn, 'phpcl', 'password');
$stmt = $pdo->query("SELECT * FROM images WHERE title = 'Apple'");
if ($stmt) {
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	echo $row['title'] . "\n";
	echo '<img src="' . "data://image/jpeg;base64,{$row['image']}" . '" />';
}
