<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script src="weight.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 360px; width: 100%;"></div><br>
<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Submit</button>
</form>

</body>
</html>