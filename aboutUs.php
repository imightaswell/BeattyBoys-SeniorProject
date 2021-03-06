<?php 
session_start();
include('server.php');?>
<!DOCTYPE HTML>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>About Us</title>
	<link rel="stylesheet" href="../css/css_aboutUs.css">
</head>

<body>
	<video src="img/aboutUsBG.mp4" class="vid-bg" autoplay loop muted></video>
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
    
		<h1 class="title">Meet The Team</h1>
	<div class="meet-team">
		<div class="container">
		<span class="border"></span>
			<div class="pics">
				<a href="#M"><img src="../img/manny.png" alt=""></a>
				<a href="#B"><img src="../img/brian.png" alt=""></a>
				<a href="#E"><img src="../img/estiben.png" alt=""></a>
			</div>

			<div class="bio" id="M">
				<span class="name">Emmanuel Valenzuela</span>
				<span class="border"></span>
				<p>
					Emmanuel or "Manny" is a Senior majoring in Computer Networking and minoring in Computer Science at Wentworth Institute of Technology. Emmanueal spearheaded the Beatty Boyz project idea and brought together like minded indivuals to envision, develope, and deploy our final project. Emmanuel supplied his nutritional and physical training knowledge for the project while developing the Javascript, HTML and PHP.
				</p>
			</div>

			<div class="bio" id="B">
				<span class="name">Brian Robles</span>
				<span class="border"></span>
				<p>
					Brian is a Senior majoring in Computer Networking and minoring in Computer Science at Wentworth Institute of Technology. Brian played a pivotal role in the Beatty Boyz project through his interest in design. Through his experience in design, Brian lead the design of the project and worked alongside Emmanuel and Estiben on creating and troubleshooting our other webpages.
				</p>
			</div>

				<div class="bio" id="E">
				<span class="name">Estiben Ventura</span>
				<span class="border"></span>
				<p>
					Estiben is a Senior majoring in Computer Networking and minoring in Computer Science at Wentworth Institute of Technology. Estiben played an important role by setting up a Web Domain and Hosting for our website. Estiben also used his creativity to assist Brian in designing the project and helped troubleshoot any issues that came up with the site.
				</p>
			</div>
		</div>




</body>

</html>