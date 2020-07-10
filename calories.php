<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness -Calories & Macronutrients</title>
    <link rel="stylesheet" href="css_calculator.css"/>
	<script type="text/javascript" src="calculator.js"></script>

</head>
<body>
    
    <header class="fix">
    <video src="img/caloricbg1.mp4" class="vid-bg" autoplay loop muted></video>
        
         <!-- Filter Background -->
    <div class="grayfilter">
    
    <h1>Weight Change and How it Works</h1>
	
    	<p class="paragraph">
			Weight change in the human body depends on caloric intake. A calorie is a unit of energy used in nutrition<br/> when determining how much energy and nutritional value is in food. The human body uses calories to function<br/> using them for things like providing the engery for our vital organs and providing energy to our muscles<br/> when we walk. Since the human body is constantly working and using calories there’s a base amount of calories<br/> the human body uses (or burns) to ensure our bodies are functioning properly.<br/><br/>

			An analogy one can use when discussing caloric intake and the human body is gasoline and a car. The major<br/> difference is when humans fill up their metaphorical “gas tank” the energy consumed after is stored within the body.<br/> These stored calories can then be used as a source of energy for the body in the future.<br/><br/>

			Now that a basic understanding of calories and caloric intake is established one can decide if they would like to lose,<br/> maintain, or gain weight. To lose weight a person must consume less calories than their body needs to maintain its<br/>weight and vital body functions. This lowering in caloric consumption is called a caloric deficit. During a caloric deficit<br/> the body prioritizes using consumed calories for vital bodily functions and uses stored calories to run.<br/><br/> 
		
			If a person were to choose to maintain their current body weight then they would need to consume the amount of calories<br/> their body needs to ensure vital bodily functions operate while not forcing the body to tap into stored energy sources. This<br/> level of caloric intake is simply referred to as caloric maintenance.<br/><br/>
		
			Depending on a person’s goals when it comes to fitness they might want to increase their body weight. An increase in<br/> body weight is generally only possible if the person ensures they are eating above their maintenance caloric intake level.<br/> This increase in caloric intake is referred to as caloric surplus. In a caloric surplus the human body first prioritizes vital body<br/> functions, then stores the calories that are supplemental to the maintenance calories in the body.<br/> This storage could either be body fat or muscle.<br/><br/>

			-  Emmanuel Valenzuela <br> Proud CEO of BeattyBoyz Fitness <br/>
		</p>
        
    	<!-- Navi Bar -->
		<div class ="blackbar"></div>
		<div class="main">
			<div class="logo">
				<a href="index.php">
				<img src="img/logo2.png"></img>
				</a>
			</div>
			<ul>
				<li><a href="aboutUs.php">About Us</a></li>
			</ul>
		</div>
	</div>
    
	<a href="index.php?logout='1'" class="logout">Logout</a>
    
	<table class="content-table">
        <thead>
			<tr>
				<th>Maintenance Calories</th>
				<th>Cutting Calories</th>
				<th>Bulking Calories</th>
			</tr>
        </thead>
        <tbody>

			<tr>
				<td><p id="baseCals">g</p></td>
				<td><p id="cuttingCals">g</p></td>
				<td><p id="bulkingCals">g</p></td>
			</tr>

		
			<tr>
				<td><p>Protein:</p></td>
				<td><p>Protein:</p></td>
				<td><p>Protein:</p></td>
			</tr>
		
			<tr>
				<td><p id="baseProtein">g</p></td>
				<td><p id="cuttingProtein">g</p></td>
				<td><p id="bulkingProtein">g</p></td>
			</tr>

			<tr>
				<td><p>Carbs:</p></td>
				<td><p>Carbs:</p></td>
				<td><p>Carbs:</p></td>
			</tr>

			<tr>
				<td><p id="baseCarbs"></p>g</td>
				<td><p id="cuttingCarbs">g</p></td>
				<td><p id="bulkingCarbs">g</p></td>
			</tr>

			<tr>
				<td><p>Fats:</p></td>
				<td><p>Fats:</p></td>
				<td><p>Fats:</p></td>
			</tr>

			<tr>
				<td><p id="baseFats">g</p></td>
				<td><p id="cuttingFats">g</p></td>
				<td><p id="bulkingFats">g</p></td>
			</tr>
		</tbody>
	</table>
	</header>
</body>
</html>