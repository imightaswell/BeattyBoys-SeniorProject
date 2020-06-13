<?php 

include('server.php');

$username = $_SESSION['username'];

$query=$conn->query("SELECT password FROM user WHERE username = '.$username.'");

$result = $query->fethc();
$pass = $result['password'];
echo json_encode($pass);

 ?>