//date function for getting time and date
				var today = new Date();
				
				//get time and date -- full time and date
				var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
				var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
				
				//store output to var
				var dateTime = 'Captured Date: ' + date + ' || ' + 'Captured Time: ' + time;
				
				//display dateTime 
				document.getElementById("datetime").innerHTML = dateTime;