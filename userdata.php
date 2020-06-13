<?php 

include('server.php');

$username = $_SESSION['activity'];

$query="SELECT age FROM user WHERE username LIKE 'root'";

$result = mysqli_query($query);

while ($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
}

echo json_encode($username);

 ?>