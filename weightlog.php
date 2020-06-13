<?php 

include('server.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script>

	var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "server.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function(){

	if (this.readyState == 4 && this.status == 200){

		var weight = JSON.parse(this.responseText);	
		alert(weight);
		console.log(weight);

		window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: "Simple Line Chart"
		},
		axisY:{
			includeZero: false
		},
		data: [{        
			type: "line",
      		indexLabelFontSize: 16,
			data: weight
			}]
		});
		chart.render();

		}
	}
	}
	</script>
</head>
<body>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Get weight entry from table</button>
</form>

</body>
</html>