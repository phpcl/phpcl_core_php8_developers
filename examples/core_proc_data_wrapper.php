<?php
// core_proc_data_wrapper.php
// ??? maybe there's a better example ???
$dsn = 'mysql:host=localhost;dbname=phpcl';
$pdo = new PDO($dsn, 'phpcl', 'password');
$stmt = $pdo->query('SELECT * FROM images');
if ($stmt) {
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo $row['title'] . "\n";
		echo '<img src="' . "data://image/jpeg;base64,{$row['image']}" . '" />';
	}
}
