<?php 
include('server.php');

$username = $_SESSION['username'];
 
$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($result);

$age = $result['age'];
$weight = $result['weight'];
$height = $result['height'];
$gender = $result['gender'];
$activity = $result['activity_level']; 

$userdata = array();

array_push($userdata, $age, $weight, $height, $gender, $activity);

echo json_encode($userdata);
 ?>