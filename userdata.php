<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$result = mysqli_query($conn, "SELECT * FROM user");

$data = array();

while ($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
}

echo json_encode($data);

 ?>