<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="weight.js"></script>

</head>
<body>

<canvas id="lineChart" height="400" width="400"></canvas>

<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Submit</button>
</form>

</body>
</html>