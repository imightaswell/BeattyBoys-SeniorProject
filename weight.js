var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "server.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function(){
		
		var weight =  new Array();
		weight = JSON.parse(this.responseText);

		console.log(weight);

		var test = new Array();	
		test.push(1);
		test.push(2);

		alert(test);
	}