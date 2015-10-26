<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tradesman's Location</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map {       
		width: 700px;
        height: 550px; 

		}
    </style>

	
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzlyQ8dPWSC1GbwKAOhaJ2-NiniQVPifk&callback=initMap">
    </script>
	


  
  <script> 
  function initMap() {
  var myLatLng = {lat: 53.344104, lng: -6.2674937};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: myLatLng
  });
  var infoWindow = new google.maps.InfoWindow({map: map});
  
      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
	  
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}
  

  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  var marker = new google.maps.Marker({
  
    position: myLatLng,
    map: map,
    icon: iconBase + 'schools_maps.png'
  });
  
  
  google.maps.event.addListener(marker, 'click', function () {
  window.location.href = 'http://www.google.com';
  
  
  

  
  
});


	
  
  
}

</script> 
</head>


<body>

        <div class = "container" style="width:100%; height:100%;">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">EasyFix</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="../html/WelcomeCustomer.html">Home</a>
                            </li>
                            <li>
                                <a href="../html/JobPost.html">Post a job</a>
                            </li>
                            <li>
                                <a href="#">View available tradesmen</a>
                            </li>
                            <li>
                                <a href="#">Your profile</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>

			<h4 style="text-align: center;"><b>Trademen's current location</b></h4>
			
			<div class="jumbotron">
				<div class="container" style="width: 55%;margin: 0 auto;">			
					<div id="map"></div>
				</div>			
			</div>
		</div>
	
</body>
</html>









	
	
