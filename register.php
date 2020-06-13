<?php include('server.php') ?>

<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?> 

		<label for="username">Username:</label><br/>
		<input name="username" type="text" /><br />

		<label for="password">Password:</label><br />
		<input name="password" type="password" /><br />

		<label for="age">Age:</label><br />
		<input name="age" type="number" /><br />

		<label for="height">Your Height in Inches:</label><br />
		<input name="height" type="number" step="any" /><br />

		<label for="weight">Your Weight in Pounds:</label><br />
		<input name="weight" type="number" /><br />

		<label for="gender">Gender:</label> 
			<select name="gender">
				<option>Male</option>
				<option>Female</option> 
			</select><br>

		<label for="activtiylevel">Activity Level:</label> 
			<select name="activity">
				<option>Sedentary</option>
				<option>Moderate</option>
				<option>Intense</option>
				<option>Athlete</option> 
			</select><br> 
			
		<label for="fitness_goal">Fitness Goal:</label> 
			<select name="fitness_goal">
				<option>Hypertrophy</option>
				<option>Cardiovascular Health</option>
				<option>Strength</option>
			</select><br>

		<button type="submit" name="signup">Register</button> 
	</form>

	<div>
		<p>Already have an account? <a href="login.php">Login here</a></p>
	</div>
</body>
</html>