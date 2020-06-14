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

		for (var i=0; i<weight_array.length;i++){
			weight_array[i] = parseFloat(weight_array[i]);
		}

		var chart_array = [];

		for (var i=0; i<weight_array.length;i++){
			charty_array.push({"y":weight_array});
		}

		//alert(typeof weight_array[0]);

		var chart = new CanvasJS.Chart("chartContainer", {
  			zoomEnabled:true,
   			panEnabled:true,
  		  	animationEnabled:true,
   		 	title:{
   		    	text: "myChart from mySQL database"
   				},
		
   		 		axisX:{
   		    	title: "TimeStamp"
   		 		},
		
   		     	axisY:{
   		     	title: "myDataPoints",
   		     	minimum: 0
   		 		},
		
   		 		data: [{
   		     	type: "line",
    		    dataPoints:
    		        chart_array
    		    }]
		});
		chart.render();

		console.log(charty_array[0]);
}


		
		

	