<?php 

include('server.php');



?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<title>BeattyBoys Fitness - Weight Log</title>
</head>
<body>




<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

<script type="text/javascript">
		
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
		

		var ctx = document.getElementById("chart").getContext('2d');
    		var myChart = new Chart(ctx, {
        	type: 'line',
		       data: {
		           labels: [1,2,3,4,5,6,7,8,9],
		           datasets: 
		           [{
		               label: 'Weight',
		               data: [weight],
		               backgroundColor: 'transparent',
		               borderColor:'rgba(255,99,132)',
		               borderWidth: 3
		           },

		           ]
		       },
		     
		       options: {
		           scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		           tooltips:{mode: 'index'},
		           legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		       }
		   });



	}
	}
	</script>

<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Get weight entry from table</button>
</form>

</body>
</html>