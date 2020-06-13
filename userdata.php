<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$result = mysqli_query($conn, "SELECT password FROM user WHERE username='$_SESSION['username']'");

$data = array();

array_push($data, $result);

echo json_encode($data);

 ?>