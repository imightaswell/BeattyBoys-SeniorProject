<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$username = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT password FROM user WHERE username='$username'");


echo json_encode($username);

 ?>