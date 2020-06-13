<?php 

include('server.php');

$username = $_SESSION['username'];

$query="SELECT password FROM user WHERE username = '.$username.'";

$result = mysqli_query($query);

echo json_encode($result);

 ?>