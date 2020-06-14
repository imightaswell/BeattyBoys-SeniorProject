var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var data = JSON.parse(this.responseText);
		
		var weight =  data[1].split(",");

		for(var i=0;i<weight.length;i++){
			weight[i] = parseFloat(weight[i]);
		}

		var chart = new CanvasJS.Chart("chartContainer", {
 		 title: {
    		text: " Populating chart using array "
  		},
  		data: [{
    		type: "line",
    		dataPoints: weight
  		}]
		});

		chart.render();
		console.log(weight);
	}

	