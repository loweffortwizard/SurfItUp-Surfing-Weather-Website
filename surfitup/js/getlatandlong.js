function runScript(){
				var c = function(pos){
				var lat = pos.coords.latitude,
				long = pos.coords.longitude,
				coords = lat + ', ' + long; 
				
				document.getElementById('googlemap').setAttribute('src', 'https://maps.google.co.uk/?q=' + coords + '&z=60&output=embed');
				document.getElementById("getlocation").innerHTML = "Location: " + coords;
				}
				
				document.getElementById('getlocation').onclick = function(){
					navigator.geolocation.getCurrentPosition(c);
					return false;
				}
			}
			window.onload = runScript();