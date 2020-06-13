<?php 

session_start();

if (isset($_GET['logout'])) { 
	session_destroy(); 
	unset($_SESSION['username']); 
	header("location: login.php"); 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>
	<script type="text/javascript">
		
	var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userdata.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function(){

	if (this.readyState == 4 && this.status == 200){

		var data = JSON.parse(this.responseText);	
		var age = data[0];
		var weight = data[1];
		var height = data[2];
		var gender = data[3];
		var activity = data[4];

	}
	}
	</script>
</head>
<body>

<script>
window.onload = function () {

var dataPoints = new Array();
dataPoints.push({y: 250 });
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Weight Log"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: dataPoints;
	}]
});
chart.render();

}
</script>

</body>
</html>