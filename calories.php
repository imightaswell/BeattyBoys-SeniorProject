<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>

	<script type="text/javascript" src="calculator.js"></script>

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
			<td><p id="baseProtein"></p></td>
			<td><p id="cuttingProtein"></p></td>
			<td><p id="bulkingProtein"></p></td>
		</tr>

		<tr>
			<td><p>Carbs:</p></td>
			<td><p>Carbs:</p></td>
			<td><p>Carbs:</p></td>
		</tr>

		<tr>
			<td><p id="baseCarbs"></p></td>
			<td><p id="cuttingCarbs"></p></td>
			<td><p id="bulkingCarbs"></p></td>
		</tr>

		<tr>
			<td><p>Fats:</p></td>
			<td><p>Fats:</p></td>
			<td><p>Fats:</p></td>
		</tr>

		<tr>
			<td><p id="baseFats"></p></td>
			<td><p id="cuttingFats"></p></td>
			<td><p id="bulkingFats"></p></td>
		</tr>
	
	</table>
</body>
</html>