<!DOCTYPE HTML>

<html>

<style>
#main_body {
	margin-left:300px;
}
@media only screen and (max-width: 993px) {
  #main_body {
		margin-left:0px;
  }
}
</style>

<head>
	<title>SPARTA Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="custom-css.css">
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css">

<!-- log in directory -->
	<!--link href = "css/bootstrap.min.css" rel = "stylesheet"-->
	
	
	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<!-- for datatables -->
	<script src="resources/moment.min.js"></script>
	<script src="resources/moment.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
	<script src="resources/datetime-moment.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
	<script src="Script.js"></script>
	<script src="drawChart.js"></script>
	<script src="chart.bundle.js"></script>
		
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="resources/jquery-csv.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8" />
	
	<!-- Mapbox -->
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<!-- Import Mapbox GL JS -->
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
	
	
	    <!--[if lt IE 9]--
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


      <!--START ANYCHART.JS SECTION-->
        <!--CORE&BASE-->
        <script src="resources/anychart/js/anychart-core.min.js" type="text/javascript"></script>
        <script src="resources/anychart/js/anychart-base.min.js" type="text/javascript"></script>
        <!--SPECIFIC CHARTS-->
        <script src="resources/anychart/js/anychart-map.min.js" type="text/javascript"></script>
        <script src="resources/anychart/js/anychart-stock.min.js" type="text/javascript"></script>
        <script src="resources/anychart/js/anychart-tag-cloud.min.js" type="text/javascript"></script>
        <script src="resources/anychart/js/anychart-table.min.js" type="text/javascript"></script>
        <script src="resources/anychart/js/anychart-exports.min.js" type="text/javascript"></script>
        
        <!--UI ELEMENTS-->
        <script src="resources/anychart/js/anychart-ui.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="resources/anychart/css/anychart-ui.min.css"/>
        <link rel="stylesheet" type="text/css" href="resources/anychart/fonts/css/anychart-font.min.css"/>
        
        <script src="resources/anychart/themes/dark_earth.min.js"></script>


    

</head>

<body class="din">
	<?php include ('topbar.php'); ?>
		<nav>
			<div class="spacer">&nbsp;</div>
			<div class="w3-sidebar w3-bar-block w3-gray w3-hide-small w3-hide-medium w3-large" style="width:300px;">
				<?php include ('menu.php'); ?>
			</div>
			<div id="sideBar" class="w3-center w3-sidebar w3-xxlarge w3-animate-left w3-hide w3-col l2 w3-bar-block w3-gray">
				<?php include ('menu.php'); ?>
			</div>
		</nav>

<div id="main_body">

	<?php
		// About page for monitoring and evaluation portal
		include ('about.php');

		// Pages for project progress
		include ('project_overview.php');
		include ('project_status.php');
		include ('project_drilldown.php');

		// Pages for program metrics
		include ('overall_snapshot.php');
		include ('pathway_level.php');
		include ('course_level.php');
		include ('course_quality.php');

		// Pages for learner details
		include ('demographics.php');
		include ('learner_location.php');

		// Pages for portal metrics
		include ('portals-infosite.php');
		include ('portals-hackathon.php');
		include ('portals-opendata.php');

		// Insert log-in, session handler
		if (isset($_GET["page"])) {
			$page = $_GET['page'];

		// Case handler from menu.php
		switch ($page) {
			case 'project_overview':
				showProjectOverview();
				break;
			case 'project_status':
				showProjectStatus();
				break;
			case 'project_drilldown':
				showProjectDrilldown();
				break;

			case 'overall_snapshot':
				showOverallSnapshot();
				break;
			case 'pathway_level':
				showPathwayLevel();
				break;
			case 'course_level':
				showCourseLevel();
				break;
			case 'course_quality':
				showCourseQuality();
				break;

			case 'demographics':
				showDemographics();
				break;
			case 'location':
				showMap();
				break;

			case 'infosite':
				showInfosite();
				break;
			case 'hackathon':
				showHackathon();
				break;
			case 'opendata':
				showOpenData();
				break;

			default:
				showAbout();
				break;
		}
		} else {
		showAbout();
		}
	?>
</div>

<script src="resources/app_js.js"></script>


</body>



</html>
