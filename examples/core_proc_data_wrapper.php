<?php
// core_proc_data_wrapper.php
// ??? maybe there's a better example ???
$dsn = 'mysql:host=localhost;dbname=phpcl';
$pdo = new PDO($dsn, 'phpcl', 'password');
$stmt = $pdo->query('SELECT * FROM images');
$titles = [];
echo '<table>';
echo '<tr>';
if ($stmt) {
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$titles[] = $row['title'];
		echo '<td>'
			 . '<img src="' . "data://image/jpeg;base64,{$row['image']}" . '" />'
			 . '</td>';
	}
}
echo '</tr>';
echo '<tr><th>' . implode('</th><th>', $titles) . '</th></tr>';
echo '</table>';
