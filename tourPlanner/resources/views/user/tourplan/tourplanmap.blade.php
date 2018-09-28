@extends('user/index')

@section('content')

    <div class="container">
        <br>
        <div class="">
        <a href="{{ url('user/mapview') }}" class="btn btn-info">List View</a>
        </div>
        <br>
        <div id="map" style="width:85.2%; height:600px"></div>

    </div>

@endsection



<script>



function myMap() {
	var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
	var mapOptions = {
		center: new google.maps.LatLng(7.292669, 80.632820),
		zoom: 9,
		mapTypeId: google.maps.MapTypeId.roadmap
	}

	map = new google.maps.Map(document.getElementById("map"), mapOptions);
	directionsDisplay.setMap(map);

	//set route method
	
	calculateAndDisplayRoute(directionsService, directionsDisplay);

}




//add marker on map
function addMarker(coordinates){

	var marker = new google.maps.Marker({
		position: coordinates,
		map:map,
		icon:{
			path: google.maps.SymbolPath.CIRCLE,
			scale: 7,
			strokeColor: "#ff0000"
		}
	});
}







//get data from firebase
function gotData(data) {
	//console.log(data.val());
	var Request = data.val();
	var keys = Object.keys(Request);
	//console.log(keys)
	for (var i = 0; i < keys.length; i++) {
		var k = keys[i];
		longitude = Request[k].longitude;
		latitude = Request[k].latitude;
		requestType = Request[k].wasteType;
		//console.log(longitude, latitude, requestType);

		var myLatlng = new google.maps.LatLng(latitude,longitude);
		
		setMarkerColour();

		addMarker(myLatlng);
	}
	//console.log(waypntArray);
}






//set optimized route
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
	var waypts = [];
	var waypntArray = new Array();

	//var newfirebase = firebase.database().ref('Request');

	//newfirebase.on('value',gotData3);

	function gotData3(datasnapshot){ 
		var Request = datasnapshot.val();
		var keys = Object.keys(Request);

		//console.log(keys)
		for (var i = 0; i < keys.length; i++) {
			var k = keys[i];
			longitude = Request[k].longitude;
			latitude = Request[k].latitude;
			requestType = Request[k].wasteType;
			
			var myLatlng = new google.maps.LatLng(latitude,longitude);

			if(requestType == getSelectedCategory()){
				waypts.push({
					location: myLatlng,
					stopover: true
				});
			}
			
		} 
	}


	directionsService.route({
		origin: "6.914517, 79.868215",
		destination: "7.292669, 80.632820",
		waypoints: waypts,
		optimizeWaypoints: true,
		travelMode: 'DRIVING'
	}, function(response, status) {
		var tripDistancePanel = document.getElementById('tripDistance');
		if (status === 'OK') {
			directionsDisplay.setDirections(response);
			var route = response.routes[0];
			var totalDistance = 0;
			var distanceT = 0;
			var summaryPanel = document.getElementById('routeDetails');
			summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
            	var routeSegment = i + 1;
            	summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
            	'</b><br>';
            	summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
            	summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
            	summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            	totalDistance = totalDistance + parseFloat((route.legs[i].distance.value)/1000);
            	//console.log(route.legs[i].end_address);
            }
            totTrip = (totalDistance.toFixed(2));
            tripDistancePanel.innerHTML = totTrip + ' km';
        } 
        else {
        	window.alert('Directions request failed due to ' + status);
        }
    });
}








</script>