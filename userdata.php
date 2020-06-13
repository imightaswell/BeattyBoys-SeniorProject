<?php include('server.php') ?>
<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$username = $_SESSION['username'];
$age = $_SESSION['age'];

//$result = mysqli_query($conn, "SELECT password FROM user WHERE username='$username'");


echo json_encode($age);

 ?>