var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var data = this.responseText;
		
		var weight = [];

		weight =  data[1].split(",");

		for(var i=0;i<weight.length;i++){
			weight[i] = parseFloat(weight[i]);
		}
		console(weight);
		console(weight[0]*2);
		alert(weight[0]);

		//window.onload = function () {

		//var chart = new CanvasJS.Chart("chartContainer", {
			//animationEnabled: true,
			//theme: "light2",
			//title:{
				//text: "Simple Line Chart"
			//},
			//axisY:{
				//includeZero: false
			//},
			//data: [{        
				//type: "line",
      			//indexLabelFontSize: 16,
				//datasets: [
				//{
				//	label: "Weight Entries"
				//	data: [1,2,3]
				//}
		//	}]
		//	});
		//chart.render();
		//}
	}

	