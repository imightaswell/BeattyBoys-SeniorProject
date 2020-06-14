var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var data = JSON.parse(this.responseText);
		
		var weight =  data[1].split(",");
		$dataPoints = array();

		for(var i=0;i<weight.length;i++){
			weight[i] = parseFloat(weight[i]);
			array_push($dataPoints, $weight);
		}

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
		dataPoints: <?php echo json_encode($dataPoints); ?>
	}]
});
chart.render();

}

	}

	