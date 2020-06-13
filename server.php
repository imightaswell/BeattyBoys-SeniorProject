<?php 	

session_start();

$username= '';
$password= '';
$age= '';
$height= '';
$weight= '';
$gender= '';
$activity= '';
$fitness_goal='';
$_SESSION['success'] = "";
$errors = array();

$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);


if(isset($_POST['signup'])){

	$username= $_POST['username'];
	$password= $_POST['password'];
	$age= $_POST['age'];
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	$gender= $_POST['gender'];
	$activity= $_POST['activity'];
	$fitness_goal=$_POST['fitness_goal'];



	if (empty($username)) { array_push($errors, "Please enter username");}
	if (empty($password)) { array_push($errors, "Please enter password");}
	if (empty($age)) { array_push($errors, "Please enter age");}
	if (empty($height)) { array_push($errors, "Please enter height");}
	if (empty($weight)) { array_push($errors, "Please enter weight");}
	

	if (count($errors) == 0){
		$password = md5($password);

		$query = "INSERT INTO user(username,password,age,height,weight,gender,activity_level, fitness_goal) VALUES('$username','$password', '$age', '$height', '$weight', '$gender', '$activity', '$fitness_goal')";

		mysqli_query($conn,$query);

		$_SESSION['username'] = $username;
		
		$_SESSION['success'] = "You have logged in";

		header('location: index.php');
	}
}





if (isset($_POST['signin'])) {

	$username= $_POST['username'];
	$password= $_POST['password'];
	
	if (empty($username)) { array_push($errors, "Username is required");}
	if (empty($password)) { array_push($err, "Password is required");}

	if (count($errors)==0){

		$password = md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result)==1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have logged in";

			header('location: index.php');


		}

		else {
			array_push($errors,"Username or password incorrect");
		}

	}
}

//$query="SELECT password FROM user WHERE username = '$username'";

//$result = mysqli_query($query);

echo json_encode($username);



 ?>