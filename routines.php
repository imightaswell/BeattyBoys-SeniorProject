<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>BeattyBoys Fitness - Workout Routines</title>
	<link rel="stylesheet" href="../css/css_routine.css"/>>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
</style>
</head>
<body>
	<?php if ($_SESSION['fitness_goal'] === 'Hypertrophy') :?>
<div class="container" id="accordion">
	<div class="button1" >
		<div class="card"> <!-- Panel (collapasable) -->
    		<div class="card-header" id="headingOne" > <!-- Panel head -->
       			 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" ariacontrols="collapseOne">
          			  3-Day Split
        		</button>           
    		</div> <!-- END Panel head -->
   			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"> <!-- Collapsable section -->
        		<div class="card-body "> <!-- Panel body -->     

    		<table class="content-table" >
			<thead>
			<tr>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td>Bench Press</td>
			<td>Squat</td>
			<td>Rest</td>
			<td>Bench Press</td>
			<td>Squat</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>
		<tr>
			<td>Pull Ups</td>
			<td>Deadlift</td>
			<td>Rest</td>
			<td>Pull Ups</td>
			<td>Deadlift</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>

		<tr>
			<td>Overhead Press</td>
			<td>Seated Leg Extension</td>
			<td>Rest</td>
			<td>Overhead Press</td>
			<td>Seated Leg Extension</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>

		<tr>
			<td>Cable Rows</td>		
			<td>Seated Leg Curls</td>
			<td>Rest</td>
			<td>Cable Rows</td>
			<td>Seated Leg Curls</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>

		<tr>
			<td>Dumbbell Curls</td>
			<td>Calf Raise</td>
			<td>Rest</td>
			<td>Dumbbell Curls</td>
			<td>Calf Raise</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>

		<tr>
			<td>Cable Tricep Extension</td>
			<td>Seated Leg Curls</td>
			<td>Rest</td>
			<td>Cable Tricep Extension</td>
			<td>Seated Leg Curls</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>

		<tr>
			<td>*Ab workout of Your Choosing*</td>
			<td>*Ab workout of Your Choosing*</td>
			<td>Rest</td>
			<td>*Ab workout of Your Choosing*</td>
			<td>*Ab workout of Your Choosing*</td>
			<td>Rest</td>
			<td>Rest</td>
		</tr>
		</tbody>
		
		</table>
	</div>
	</div>
	</div>
	</div>
</div>
	<?php endif ?>

	<?php if ($_SESSION['fitness_goal'] === 'Strength') :?>
	<table>
			<tr>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
			</tr>

			<tr>
				<td>Bench Press</td>
				<td>Front Squat</td>
				<td>Rest</td>
				<td>Floor Press</td>
				<td>Rest</td>
				<td>Box Squat</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Barbell Overhead Press</td>
				<td>Pin Lockouts</td>
				<td>Rest</td>
				<td>Decline Press</td>
				<td>Rest</td>
				<td>Leg Curl</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Dumbbell Overhead Press</td>
				<td>Hack Squats</td>
				<td>Rest</td>
				<td>Dumbbell Bench Press</td>
				<td>Rest</td>
				<td>Leg Extension</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Dumbbell Extensions</td>
				<td>Box Squat</td>
				<td>Rest</td>
				<td>Close-Grip Bench Press</td>
				<td>Rest</td>
				<td>Stiff-Legged Deadlifts</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Tricep Pushdown</td>
				<td>Deadlift</td>
				<td>Rest</td>
				<td>Incline Bench Press</td>
				<td>Rest</td>
				<td>Shrugs</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Skull Crushers</td>
				<td>Good Mornings</td>
				<td>Rest</td>
				<td>Dumbbell Extensions</td>
				<td>Rest</td>
				<td>Seated Calf Raise</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Lat Pulldowns</td>
				<td>Stiff-Legged Deadlifts</td>
				<td>Rest</td>
				<td>Tricep Pushdown</td>
				<td>Rest</td>
				<td>Standing Calf Raise</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Bent-Over Row</td>
				<td>Leg Curls</td>
				<td>Rest</td>
				<td>Skull Crushers</td>
				<td>Rest</td>
				<td>Face Pull</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Cable Row</td>
				<td>Lat Pulldown</td>
				<td>Rest</td>
				<td>Bent-Over Row</td>
				<td>Rest</td>
				<td>*Bicep excercise of your choosing*</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>1-Arm Dumbbell Row</td>
				<td>Bent-Over Rows</td>
				<td>Rest</td>
				<td>Lat Pulldowns</td>
				<td>Rest</td>
				<td>*Ab excercise of your choosing*</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>*Ab excercise of your choosing*</td>
				<td>Bicep & Ab excercises of your choosing</td>
				<td>Rest</td>
				<td>*Ab excercise of your choosing*</td>
				<td>Rest</td>
				<td>*Ab excercise of your choosing*</td>
				<td>Rest</td>
			</tr>
	</table>
	<?php endif ?>

	<?php if ($_SESSION['fitness_goal'] === 'Cardiovascular Health') :?>
		<table>
			<tr>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
				<th>Sunday</th>
			</tr>

			<tr>
				<td>45-60 Minute Jog</td>
				<td>60-90 Minute Bicycling</td>
				<td>45-60 Minute Jog</td>
				<td>60-90 Minute Bicycling</td>
				<td>45-60 Minute Jog</td>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Dumbbell Bench Press</td>
				<td>20-25 Minute Stairmaster</td>
				<td>Dumbbell Bench Press</td>
				<td>20-25 Minute Stairmaster</td>
				<td>Dumbbell Bench Press</td>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Pull-Ups</td>
				<td>Rest</td>
				<td>Pull-Ups</td>
				<td>Rest</td>
				<td>Pull-Ups</td>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Overhead Press</td>
				<td>Rest</td>
				<td>Overhead Press</td>
				<td>Rest</td>
				<td>Overhead Press</td>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Squat</td>
				<td>Rest</td>
				<td>Squat</td>
				<td>Rest</td>
				<td>Squat</td>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			<tr>
				<td>Deadlift</td>
				<td>Rest</td>
				<td>Deadlift</td>
				<td>Rest</td>
				<td>Deadlift</td>>
				<td>Rest</td>
				<td>Rest</td>
			</tr>
			
		</table>
	<?php endif ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>