<?php 

include('server.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script type="text/javascript">
		
	var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "server.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function(){

	if (this.readyState == 4 && this.status == 200){

		var weight = JSON.parse(this.responseText);	
		alert(weight);
		
	}
	}
	</script>

	

</head>
<body>

<form method="post" action="weightlog.php">
	<button type="submit" name="weightChange">Get weight from table</button>
</form>

</body>
</html>