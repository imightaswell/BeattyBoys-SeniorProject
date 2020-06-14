var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var userdata = this.responseText;
		var userdata_array = userdata.split(",");
		var weight = userdata_array[1];

		weight = weight.substring(1, weight.length-1);
		var weight_array = weight.split(".");

		console.log(weight_array);

		for (var i=0; i<weight_array.legth;i++){
			weight_array[i] = parseFloat(weight_array[i]);
		}

		//var num =  weight_array[0];

		alert(typeof weight_array[0]);

		
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

	