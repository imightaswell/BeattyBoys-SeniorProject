<?php 

include('server.php');

$username = $_SESSION['username'];

$result = mysqli_query($conn,"SELECT gender FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($result);
echo json_encode($result['gender']);

 ?>