<?php 

include('server.php');

$username = $_SESSION['username'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($result);


$age = $result['age'];

$weight_array = array();

$weight_string = $result['weight'];

$weight_array = explode(",", $weight_string);

//weight_array[0] = 172
//weight_array[1] = 170

$relevant_weight = sizeof($weight_array)-1;

$weight = $weight_array[$relevant_weight];
$height = $result['height'];
$gender = $result['gender'];
$activity = $result['activity_level'];

$userdata = array();

array_push($userdata, $age, $weight, $height, $gender, $activity);

echo json_encode($userdata);

 ?>