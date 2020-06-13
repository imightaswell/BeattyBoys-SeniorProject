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

	var weight =  new Array();
	weight = JSON.parse(this.responseText);	

	alert(weight);
	console.log(weight);
	

	var data = {
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: weight
        }
    ]
};


	var cv = $("#canvas").get(0).getContext("2d");

	var mychart = new Chart(cv).Line(data);

	</script>
</head>
<body>


<canvas id="canvas" height="300" width="500"></canvas>

<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Get weight entry from table</button>
</form>

</body>
</html>