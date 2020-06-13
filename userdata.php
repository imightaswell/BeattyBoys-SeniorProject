<?php 

include('server.php');



$result = mysqli_query($conn,"SELECT password FROM user WHERE username = '$username'");

echo json_encode($username);

 ?>