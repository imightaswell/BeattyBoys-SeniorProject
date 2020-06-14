var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();


	ajax.onreadystatechange = function(){
		var data = JSON.parse(this.responseText);
		var weight = data[1];
		var weight_array = [];

		alert(weight[0]);
	}

	