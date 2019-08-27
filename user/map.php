<!DOCTYPE html> 
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 <title>Google Maps Location Picker Marker</title>
 <style type="text/css"> 
 #map {
 margin: 10px;
 width: 600px;
 height: 300px; 
 padding: 10px;
 }
 </style>
 
</head>
<body>
 
<div id="map"></div>


 <table>
 <form> 
 <tr>
 <td>Latitude</td> 
 <td> <input type="text" name='latitude' id='latitude'></td>
 </tr>
 <tr> 
 <td>Longitude</td>
 <td><input type="text" name='longitude' id='longitude'></td>
 </tr>
 </form>
 </table>
 <script>
 var map;
 function initMap() {
 var opts = { 'center': new google.maps.LatLng(-7.0729307,106.7147456), 'zoom': 12, 'mapTypeId': google.maps.MapTypeId.ROADMAP }
 map = new google.maps.Map(document.getElementById('map'), opts);
 var drawingManager = new google.maps.drawing.DrawingManager({
													drawingControl: true,
													drawingControlOptions: {
														position: google.maps.ControlPosition.TOP_CENTER,
														drawingModes: [google.maps.drawing.OverlayType.MARKER]
													}
												});
											drawingManager.setMap(map);
google.maps.event.addListener(map,'click',function(event) {
 document.getElementById('latitude').value = event.latLng.lat();
 document.getElementById('longitude').value = event.latLng.lng();
 });

 google.maps.event.addListener(drawingManager, 'markercomplete', function(marker){
    document.getElementById('latitude').value = marker.getPosition().lat(); 
																document.getElementById('longitude').value  = marker.getPosition().lng();
															});
 } 
 google.maps.event.addDomListener(window, 'load', init_map);
 </script>
 
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy_jOHINKraUoHzUcpoqsfMv7n9PqkZnk&language=id&region=id&libraries=drawing&callback=initMap" async defer>
 </script>
 
</body>
</html>