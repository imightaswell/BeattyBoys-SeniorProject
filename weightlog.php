<?php 
session_start();
include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<link rel="stylesheet" href="css/css_weightlog.css"/>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	</script>

	<script src="weight.js"></script>


</head>
<body>
	<div class="container">

		<canvas id="myChart" width="100" height="100"></canvas>

		<div class= "form-box">
			<form id="weight" method="post" action="weightlog.php">
				<label for="weight">Enter new weight:</label><br />
				<input name="weight" type="number" /><br/>

				<button type="submit" name="weightChange">Submit</button>
			</form>
		</div>
	</div>

</body>
</html>