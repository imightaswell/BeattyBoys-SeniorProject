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
				//alert(this.responseText);
				var data = JSON.parse(this.responseText);
				console.log(data);
				var base;
				var cutting;
				var bulking;

				var age = data[0];
				var weight = data[1];
				var height = data[2];
				var gender = data[3];
				var activity = data[4];
				
				weight = weight/2.205;
				height = height*2.54;

				var multiplier;


				if (activity == "Sedentary"){
					multiplier = 1.2;
				}

				else if (activity == "Moderate"){
					multiplier = 1.4;
				}

				else if (activity == "Intense"){
					multiplier = 1.7;
				}

				else {
					multiplier = 1.95;
				}

				if (gender=="Male"){
					base=((10*weight+6.25*height-5*age) + 5) * multiplier;
				}

				else {
					base=((10*weight+6.25*height-5*age) - 161) * multiplier;
				}

				cutting = base - (base*.2);
				bulking = base + (base*.15);

				document.getElementById('baseCals').innerHTML = base.toFixed(0);
				document.getElementById('cuttingCals').innerHTML = cutting.toFixed(0);
				document.getElementById('bulkingCals').innerHTML = bulking.toFixed(0);
			}
		}
	</script>

</head>
<body>

	

	<table>

		<tr>
			<th>Maintence Calories</th>
			<th>Cutting Calories</th>
			<th>Bulking Calories</th>
		</tr>

		<tr>
			<td><p id="baseCals"></p></td>
			<td><p id="cuttingCals"></p></td>
			<td><p id="bulkingCals"></p></td>
		</tr>

		
		<tr>
			<td><p>Protein:</p></td>
			<td><p>Protein:</p></td>
			<td><p>Protein:</p></td>
		</tr>
		
		<tr>
			<td><p>Carbs:</p></td>
			<td><p>Carbs:</p></td>
			<td><p>Carbs:</p></td>
		</tr>

		<tr>
			<td><p>Fats:</p></td>
			<td><p>Fats:</p></td>
			<td><p>Fats:</p></td>
		</tr>
	
	</table>
</body>
</html>