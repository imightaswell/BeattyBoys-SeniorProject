<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>

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
			<td>
				<script>
				var height = <?php echo $_SESSION['height']; ?>
				document.body.innerHTML = "<p>This is a test"+height+"</p>"	
				</script>
			</td>
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