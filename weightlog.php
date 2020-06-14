<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

	<script src="weight.js"></script>


</head>
<body>

<!--<div id="chartContainer" style="height: 370px; width: 100%;"></div>-->


<canvas id="myChart" width="400" height="400"></canvas>


<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Submit</button>
</form>



</body>
</html>