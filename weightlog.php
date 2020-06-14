<?php include('server.php');?>
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
			var weight =  new Array();
			weight = JSON.parse(this.responseText);	
		}
	</script>
</head>
<body>

<form method="post" action="weightlog.php">

	<label for="weight">Enter new weight:</label><br />
	<input name="weight" type="number" /><br />

	<button type="submit" name="weightChange">Get weight entry from table</button>
</form>

</body>
</html>