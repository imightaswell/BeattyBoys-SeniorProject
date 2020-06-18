<?php include('server.php') ?>

<!DOCTYPE HTML>
<html>
	<head>
    	<meta charset="utf-8">
		<title>Beatty Boyz Fitness - Register</title>
    	<link rel="stylesheet" href="css/css_register.css"/>
	</head>
    
	<body>
    
    	<!-- Video Background Source -->
    	<video src="img/loginbg.mp4" class="vid-bg" autoplay loop muted></video>
    
    	<!-- Filter Background -->
    	<div class="grayfilter">

    	<!-- Navi Bar -->
		<div class ="blackbar"></div>
    
    	<!-- Main -->
    	<div class="main">
        
    	<!-- Logo -->
			<div class="logo">
				<a href="index.php"> <img src="img/logo2.png"></img> </a>
			</div>
    	<!-- About Us text -->
			<ul>
				<li><a href="#">About Us</a></li>
			</ul>
   		</div>

		<!-- Login Form -->
		<div class="loginform">
            
    	<!-- Form -->    
			<form method="post" action="register.php">
	        
        		<img src="img/Logo4.png" class="avatar">
        		<!-- Directs to errors.php to check for any errors in the registration form -->
        		<div class="errors"><?php include('errors.php'); ?></div>

				<label for="username"></label><br/>
				<input name="username" type="text" placeholder="Username" /><br />

				<label for="password"></label><br />
				<input name="password" type="password" placeholder="Password"/><br />

				<label for="age"></label><br />
				<input name="age" type="number" placeholder="Age" /><br />
        
				<label for="height"></label><br />
				<input name="height" type="number" step="any" placeholder="Height (Inches)"/><br />
        
				<label for="weight"></label><br />
				<input name="weight" type="number" placeholder="Weight (Pounds)"/><br />
        
        <!-- Select CSS HTML -->
        
            	<div class="dds">
					<label for="gender"></label>
					<select name="gender" id="gender" data-selected="">
                		<option style="color:gray" selected="selected" disabled="disabled">Select Gender</option>
						<option>Male</option>
						<option>Female</option> 
					</select>
        
					<label for="activtiylevel"></label> 
					<select name="activity">
                		<option selected="selected" disabled="disabled"> Select Activity Level</option>
						<option>Sedentary</option>
						<option>Moderate</option>
						<option>Intense</option>
						<option>Athlete</option> 
					</select><br> 
			
					<label for="fitness_goal"></label> 
					<select name="fitness_goal">
                		<option selected="selected" disabled="disabled">Select Fitness Goal</option>
						<option>Hypertrophy</option>
						<option>Cardiovascular Health</option>
						<option>Strength</option>
					</select><br>
        		</div>
				<button type="submit" name="signup">Register</button> 
			</form>
 		</div>
		<div><p>Already have an account? <a href="login.php">Login here</a></p></div>
	</body>
</html>