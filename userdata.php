<?php 

include('server.php');

$username = $_SESSION['username'];

$result = mysqli_query($conn,"SELECT gender FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(MYSQLI_ASSOC))
echo json_encode($row['gender']);

 ?>