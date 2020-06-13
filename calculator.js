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