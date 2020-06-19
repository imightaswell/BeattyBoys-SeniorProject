<?php 	

session_start();

//Declares all needed user variables and the errors array
$username= ''; 
$password= '';
$age= '';
$height= '';
$weight= '';
$gender= '';
$_SESSION['success'] = "";
$activity= '';
$fitness_goal='';
$errors = array();

//Creates a connection to the MySQL database
$server = 'localhost';
$admin = 'beattybo_user';
$pw = 'Lovesosa123';
$db = 'beattybo_fitness';

$conn = mysqli_connect($server, $admin, $pw, $db);

//Checks if the POST element is signup (triggered if user submits the registration.php form)
if(isset($_POST['signup'])){

	//Grabs the posted information from the registraiton form
	$username= $_POST['username'];
	$password= $_POST['password'];
	$age= $_POST['age'];
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	$gender= $_POST['gender'];
	$activity= $_POST['activity'];
	$fitness_goal=$_POST['fitness_goal'];

	//Checks if the entries in the registration form are empty or not (if there are errors pushes the string to the error array)
	if (empty($username)) { array_push($errors, "Please enter username");}
	if (empty($password)) { array_push($errors, "Please enter password");}
	if (empty($age)) { array_push($errors, "Please enter age");}
	if (empty($height)) { array_push($errors, "Please enter height");}
	if (empty($weight)) { array_push($errors, "Please enter weight");}
	if (empty($activity)) { array_push($errors, "Please select an activity level");}
	if (empty($gender)) { array_push($errors, "Please choose a gender");}
	if (empty($activity)) { array_push($errors, "Please choose an activity level");}
	if (empty($fitness_goal)) { array_push($errors, "Please choose a fitness goal");}
	
	//Checks the amount of strings in the errors array; if the array is empty there are no errors
	if (count($errors) == 0){

		//Hashes the password before being stored in the database
		$password = md5($password);

		//Creates a query that inserts all provided info into the database as a new user
		$query = "INSERT INTO user(username,password,age,height,weight,gender,activity_level, fitness_goal) VALUES('$username','$password', '$age', '$height', '$weight', '$gender', '$activity', '$fitness_goal')";

		//Triggers the registration query
		mysqli_query($conn,$query);

		//Stores the username and fitness goal of the logged in user within the session and redirects them to the home page
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You have logged in";
		$_SESSION['fitness_goal'] = $fitness_goal;

		header('location: index.php');
	}
}




//Checks if the POST element is signin (triggered if user submits the login.php form)
if (isset($_POST['signin'])) {

	//Grabs the posted information from the login form
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	//Checks if the entries in the login form are empty or not (if there are errors pushes the string to the error array)
	if (empty($username)) { array_push($errors, "Username is required");}
	if (empty($password)) { array_push($err, "Password is required");}

	//Checks the amount of strings in the errors array; if the array is empty there are no errors
	if (count($errors)==0){

		//Hashes the password before being stored in the database
		$password = md5($password);

		//Creates a query that checks if the username and password entered in the database match any entries
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		//Triggeres the login query
		$result = mysqli_query($conn, $query);

		//Checks if the query resulted in a matched user (if there was 1 match then the person is logged in)
		if(mysqli_num_rows($result)==1){

			//Querys the users information and stores it in an array named result_two; the fitness goal is then grabbed from the array
			$query_two = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
			$result_two = mysqli_fetch_assoc($query_two);

			$fitness_goal = $result_two['fitness_goal'];

			//Stores the username and fitness goal of the logged in user within the session and redirects them to the home page
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have logged in";
			$_SESSION['fitness_goal'] = $fitness_goal;
			header('location: index.php');

		}
		//Pushes an error message to the errors array if there are no matching users in the MySQL database
		else {
			array_push($errors,"Username or password incorrect");
		}

	}
}

//Checks if the POST element is weightChange (triggered if user submits the weightlog.php form)
if (isset($_POST['weightChange'])){

	//stores the username from the session and querys the users infomration from the database. This stored info is saved in $result
	$username = $_SESSION['username'];

	$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
	$result = mysqli_fetch_assoc($result);

	//Stores the weight of the user from the result[] array, takes the current weight entry in the database and concatenates the new weight entry
	//to the end of it with a (.) as a delimeter
	$weight = $result['weight'];

	$weight = $weight . "." . $_POST['weight'];

	//Updates the weight entry for the user in the database with the new concatenated weight
	$query = "UPDATE user SET weight='$weight' WHERE username='$username'";
	mysqli_query($conn,$query);

	//The weight entry in the database looks like: 
	//(170.175.180.173)
	//With the last number after a (.) being the latest entered weight in weightlog.php
	
	
}

 ?>