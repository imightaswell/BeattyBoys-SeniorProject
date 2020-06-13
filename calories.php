<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>

	<script>
		var ajax =  new XMLHttpRequest();
		var method = "GET";
		var url = "userdata.php";
		var asynchronous = true;

		ajax.open(method, url, asynchronous);

		ajax.send();

		ajax.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200){
				alert(this.responseText);
				//var data = JSON.parse(this.responseText);
				//console.log(data);
			}
		}


	</script>

</head>
<body>

	

	<table>

		<tr>
			<th>Maintence Calories</th>
			<th>Bulking Calories</th>
			<th>Cutting Calories</th>
		</tr>

		<!-- Calories row -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<!-- Carbs row -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<!-- Protein row -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<!-- Fats row -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	
	</table>
</body>
</html>