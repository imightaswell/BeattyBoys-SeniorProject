<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$username = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT password FROM user WHERE username='$username'");

$data = array();

array_push($data, $result);

echo json_encode($data);

 ?>