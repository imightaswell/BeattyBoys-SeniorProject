<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>

	<script type="text/javascript">
		var bool = "<?php echo $weight?>";
		document.getElementById("weight").innerHTML=bool;
	</script>
</head>
<body>

	 <p id="weight"></p>

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