<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>

<head lang="en">
	<meta charset="utf-8">
	<title>Beatty Boyz Fitness - Login</title>
	<link rel="stylesheet" href="css/css_login.css"/>
</head>


<body>

	<!-- Video Background Source -->
	<header class="fix">
		<video src="img/loginbg.mp4" class="vid-bg" autoplay loop muted></video>
		<div class="grayfilter">

		<!-- Navi Bar -->
		<div class ="blackbar">
		</div>
		<div class="main">
			<div class="logo">
				<a href="index.php">
				<img src="img/logo2.png"></img>
				</a>
			</div>
			<ul>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
	</div>

	<!-- Login Form -->
		<div class="loginform">
			<form action="login.php" method="post">

				<img src="img/Logo4.png" class="avatar">
				<div class="errors">
                <?php include('errors.php'); ?>
			    </div>

				<label for="username"></label><br>
				<input type="text" name="username" placeholder="Username"><br>
				<label for="password"></label><br>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit" name="signin" value="login">Login</button> 
				<p>New user? <a href="register.php">Register here</a>.</p>
			</form>
    	</div>

</header>
</body>
</html>