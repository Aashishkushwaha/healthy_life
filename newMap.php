<?php

	$search = $_POST['doctor'];

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;
	  var search = "<?php echo $_POST['doctor']; ?>";
      
      function initMap() {

		if (navigator.geolocation)
      	{
      		navigator.geolocation.getCurrentPosition(location);
      	}

		function location(position)
 		{
			var pyrmont = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		

//        var pyrmont = {lat: 18.524099, lng: 73.844758};

		console.log(pyrmont);
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();

         var request = {
    location: pyrmont,
    radius: '500',
    query: search
  };

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
}
}


      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
//            console.log(results[i]);
          }
        }
      }

      function createMarker(place) {

        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          //infowindow.setContent(place['name']);
          infowindow.setContent('<div> <strong><h2> ' + place.name + '</strong> '
          					+ '<br><h3>' + place.formatted_address + '</div>' + '<img src = \"' + place.icon + '\"' + '</div>');
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2gywCy0KIgeKs_jqMXTEV-kRilpwoBXI&libraries=places&callback=initMap" async defer></script>
  </body>
</html>