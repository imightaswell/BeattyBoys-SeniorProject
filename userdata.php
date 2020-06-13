<?php 

include('server.php');

$username = $_SESSION['username'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($result);
echo json_encode($result);

$age = $result['age'];
$weight = $result['weight'];
$height = $result['height'];
$gender = $result['gender'];
$activity = $result['activity'];


 ?>