var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var data = JSON.parse(this.responseText);
		var weight_array = data[1];

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
				dataPoints: weight_array
			}]
		});
		chart.render();
	}

	