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

		for (var i=0; i<weight_array.length;i++){
			weight_array[i] = parseFloat(weight_array[i]);
		}

		var labels = [];
		
		var array_length = weight_array.length+1;

		for (var i=1;i<array_length;i++){
			labels.push(i);
		}

		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
    		type: 'line',
    		data: {
        		labels: labels,
        			datasets: [{
            			label: 'Weight Entries',
            			data: weight_array,
            			backgroundColor: ['rgb(0,0,0)'],
            			borderColor: ['rgb(0,0,0)'],
            			borderWidth: 1,
            			lineTension: 0,
            			fill : false
        		}]
    		},
    		options: {
                maintainAspectRatio : false,
    			legend : {onClick: (e) => e.stopPropagation()},
        		scales: {
            		yAxes: [{
                		ticks: {
                    		beginAtZero: true,
                            fontSize: 20,
                    			callback: function(value, index, values) {
                        			return value + "lbs";
                    }
                }
            }],

            xAxes: [{
            	ticks : {
                    fontSize: 20,
            		callback: function(value, index, values){
            			return 'Entry ' + value;
            		}
            	}
            }]
        }
    }
});
}


		
		

	