<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Workout Routines</title>
</head>
<body>
	<?php if (isset($_SESSION['username'])) : ?>
		<p>Hello <?php echo $_SESSION['username']; ?></p>
		<p>Your fitness goal is<?php echo $_SESSION['fitness_goal']; ?></p>
</body>
</html>