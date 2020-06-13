<?php include('server.php') ?>
<?php 

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

$username = $_SESSION['username'];
$age = $_SESSION['age'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

$data = array();

while ($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
}

echo json_encode($row);

 ?>