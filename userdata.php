<?php 

include('server.php');

$username = $_SESSION['username'];

$query="SELECT password FROM user WHERE username = root";

$result = mysqli_query($query);

echo json_encode($result);

 ?>