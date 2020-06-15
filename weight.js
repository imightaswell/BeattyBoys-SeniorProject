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
		
		var array_length = weight_array.length+1;

		for (var i=1;i<array_length;i++){
			labels.push(i);
		}
		//alert(typeof weight_array[0]);


		var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Weight Entries',
            data: weight_array,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
            
        }]
    },
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


		
		

	