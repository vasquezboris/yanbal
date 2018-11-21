@extends('layouts.app')
<br><br>
	<style>
	#map{
		height: 460px;
		width: 100%;
	}

		
	</style>
<br>
	<center><div id="map"></div></center>
<script>
	function initMap(){
		var uluru={lat:-22.0489293, lng:-63.6809603};
		var map=new google.maps.Map(document.getElementById('map'),
			{zoom:4, center:uluru});
		var marker =new google.maps.Marker({position:uluru, map:map});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAQvDEy6Pr1gHZXitLon93NFGD-6VfwUw&callback=initMap"
  type="text/javascript"></script>
	
