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

		const CHART = document.getElementById("lineChart");
		console.log(CHART);
		let lineChart =  new Chart(CHART, {
			type:'line',
			data:{
				datasets: [
				{
					data: weight
				}]
			}
		})
	}

	