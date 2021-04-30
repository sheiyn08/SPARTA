<?php

function showMap() {
?>
<style>
	body {
	margin: 0;
	padding: 0;
	}

	#mapContainer {
	position: absolute;
	right: 0;
	top: 0;
	bottom: 0;
	width: 50%;
	}
</style>
<head>
	<meta charset='utf-8' />
	<title>Join local JSON data with Boundaries</title>
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

</head>
<body>

<div class="w3-row" id="content_padding">
	<div class="w3-container w3-third w3-small">
		<h3>Learner Location</h3>
		<p>Distribution of learners according to their registered address. Field became required in June 2020, hence some learners did not enter their information. Null fields are also found in the database.</p>

		<p>Addresses may reflect learner's permanent address or identified address at the time of enrolment.</p>

		<hr>
		<p></p> 
		
		<table id="tableContainer" class="w3-table w3-hoverable w3-bordered w3-striped">
		<script src="call_data.js"> callData(municipality)</script>
		</table>
	</div>

	<div id="mapContainer" class="w3-container w3-right" ></div>
        
</div>

<script>
	// current personal access token, change access token to DAP account
    mapboxgl.accessToken = 'pk.eyJ1IjoiY3JpY2tldGVlciIsImEiOiJjazdyaWNoNm8wNDBzM2dwY2J3bGxsMWM4In0.8QowwRSePf3Xj4OKHr6JlQ';

    // Initialize a map
    var map = new mapboxgl.Map({
		container: 'mapContainer',
		style: 'mapbox://styles/mapbox/light-v10',
		center: [120.98, 12.79], // centered on PH
		zoom: 5
    });
	
	map.on('load', function() {

		// Add source for admin-1 Boundaries
		map.addSource('admin-1', {
			type: 'vector',
			url: 'mapbox://mapbox.boundaries-adm2-v3'
		});

		// Add a layer with boundary polygons
		map.addLayer(
		{
			id: 'admin-2-fill',
			type: 'fill',
			source: 'admin-2',
			'source-layer': 'boundaries_admin_2',
			paint: {
			'fill-color': '#CCAACC'
		}
		},
		// This final argument indicates that we want to add the Boundaries layer
		// before the `waterway-label` layer that is in the map from the Mapbox
		// Light style. This ensures the admin polygons will be rendered on top of
		// the
		'waterway-label'
		);
	}
	);
    // Local data code from the next step will go here.
</script>

</body>

<br>

<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l12">
		<footer>
			<div class="w3-padding sparta-maroon" style="position:fixed; bottom:0; width:100%">
				Analytics Association of the Philippines
			</div>
		</footer>
	</div>
</div>

<?php
}