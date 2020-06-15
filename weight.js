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

		var labels = [];
		

		for (var i=1;i<weight_array.length;i++){
			labels.push(i);
		}
		//alert(typeof weight_array[0]);


		var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: [{
    	data : weight_array
    }] 
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
});
}


		
		

	