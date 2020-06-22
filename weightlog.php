<?php 
session_start();
include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Weight Log</title>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<link rel="stylesheet" href="css/css_weightlog.css"/>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	</script>

	<script src="weight.js"></script>


</head>
<body>
	<video src="img/weightlogbg2.mp4" class="vid-bg" autoplay loop muted></video>
	  <!-- Filter Background -->
		    <div class="grayfilter"> 
		    
		    <!-- Navi Bar -->
				<div class ="blackbar"></div>
				<div class="main">
					<div class="logo">
						<a href="index.php">
						<img src="img/logo2.png"></img>
						</a>
					</div>
					<ul>
						<li><a href="#">About Us</a></li>
					</ul>
			   </div>
		    </div>
    
<a href="index.php?logout='1'" class="logout">Logout</a>
    
	<div class="container">

		<canvas id="myChart" width="100" height="100" style="background-color: #141418"></canvas>
        
		<div class= "form-box">
			<form id="weight" method="post" action="weightlog.php">
				<label for="weight"></label><br />
				<input name="weight" type="number" placeholder="Enter new weight"/><br/>

				<button type="submit" name="weightChange">Submit</button>
			</form>
            
            <img src="img/Logo3.png" class="avatar">
		</div>
	</div>

</body>
</html>