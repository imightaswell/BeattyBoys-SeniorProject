//Function that returns an array of the recommended amounts of macronutrients someone should consume daily
//parameters c = calories w = weight in pounds
//array [Protein, Carbs, Fats]
function macros(c, w){

	var array = new Array();

	/** Calculates the protein (1g per pound of body weight) then takes away the calories from the protein from the total **/
	var protein = w;
	array.push(protein + "g");
	var leftOver = c - (protein*4);

	/** Calculates the fats (25% of caloric intake) then takes away the calories from the fats from the remaining calories **/
	var fats = ((c*.25)/9).toFixed(0);
	array.push(fats + "g");
	leftOver = leftOver - (fats*9);

	/** Calculates the carbs (remaining calories) then takes away the calories from the fats from the remaining calories **/
	var carbs = (leftOver/4).toFixed(0);
	array.push(carbs + "g");

	return array;
	
}

//Function that returns the maintence calories a person should consume daily using the Mifflin-St Jeor equaiton
function calories(age, weight, height, gender, activity){
	
	var base;

	var multiplier;


	if (activity == "Sedentary"){multiplier = 1.2;}

	else if (activity == "Moderate"){multiplier = 1.4;}

	else if (activity == "Intense"){multiplier = 1.7;}

	else {multiplier = 1.95;}

	if (gender=="Male"){base=((10*weight+6.25*height-5*age) + 5) * multiplier;}

	else {base=((10*weight+6.25*height-5*age) - 161) * multiplier;}

	return base;
}

//Creates a connection to the userdata.php file where a users data is retrieved depending on who is logged in 
var ajax =  new XMLHttpRequest();
	var method = "GET";
	var url = "userdata.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function(){

		var data = JSON.parse(this.responseText);
			
		var age = data[0];
		var weight = data[1];
		var height = data[2];
		var gender = data[3];
		var activity = data[4];
			
		weight = weight/2.205;
		height = height*2.54;


		var base = calories(age, weight, height, gender, activity);
		var cutting = base - (base*.2);
		var bulking = base + (base*.15);

		var maintainArray;
		var cuttingArray;
		var bulkingArray;

		baseArray = macros(base, weight*2.205);
		cuttingArray = macros(cutting, weight*2.205);
		bulkingArray = macros(bulking, weight*2.205);

		document.getElementById('baseCals').innerHTML = base.toFixed(0);
		document.getElementById('cuttingCals').innerHTML = cutting.toFixed(0);
		document.getElementById('bulkingCals').innerHTML = bulking.toFixed(0);

		document.getElementById('baseProtein').innerHTML = baseArray[0];
		document.getElementById('baseFats').innerHTML = baseArray[1];
		document.getElementById('baseCarbs').innerHTML = baseArray[2];

		document.getElementById('cuttingProtein').innerHTML = cuttingArray[0];
		document.getElementById('cuttingFats').innerHTML = cuttingArray[1];
		document.getElementById('cuttingCarbs').innerHTML = cuttingArray[2];

		document.getElementById('bulkingProtein').innerHTML = bulkingArray[0];
		document.getElementById('bulkingFats').innerHTML = bulkingArray[1];
		document.getElementById('bulkingCarbs').innerHTML = bulkingArray[2];
	}

		
		