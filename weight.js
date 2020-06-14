var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userweight.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	var weight =  new Array();

	ajax.onreadystatechange = function(){
		weight = JSON.parse(this.responseText);
	}

	alert(weight);