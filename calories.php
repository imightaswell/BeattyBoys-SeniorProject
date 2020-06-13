<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>

</head>
<body>

	<?php if (isset($_SESSION['username'])) : ?> 
	<p>Signed in as,<strong><?php echo $_SESSION['weight']; ?></strong></p> 
	<?php endif ?> 

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