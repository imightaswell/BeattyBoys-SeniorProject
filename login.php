<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>

<head lang="en">
	<meta charset="utf-8">
	<title>Beatty Boyz Fitness - Login</title>
	<link rel="stylesheet" href=""/>
</head>

<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo1.png">
			</div>
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</div>
	</header>

	<form action="login.php" method="post">
		<?php include('errors.php'); ?> 
		<label for="username">Username:</label><br>
		<input type="text" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" name="password"><br>
		<button type="submit" name="signin">Login</button> 
	</form>

	<div>
		<p>New user? <a href="register.php">Register here</a>.</p>
	</div>
</body>

</html>

