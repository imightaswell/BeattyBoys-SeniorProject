var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		if(ajax.readyState == 4 && xhttp.status == 200) {
        var data = JSON.parse(this.responseText);
		
		var weight =  data[1].split(",");

		for(var i=0;i<weight.length;i++){
			weight[i] = parseFloat(weight[i]);
			$dataPoints = weight[i];
		}
    }
    echo json_encode($dataPoints, JSON_NUMERIC_CHECK);

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
			dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();

}

	

	