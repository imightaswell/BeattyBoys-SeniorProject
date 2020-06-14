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

		
		
		

		//weight =  data[1].split(",");

		//for(var i=0;i<weight.length;i++){
			//weight[i] = parseFloat(weight[i]);
		//}
		console.log(weight_array);
		
		//alert(Array.isArray(userdata));
		

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

	