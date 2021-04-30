<!DOCTYPE HTML>

<html>
<head>
	<title>SPARTA Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="custom-css.css">
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css">
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

	include ('project_overview.php');
	include ('project_status.php');
	include ('overall_snapshot.php');
	include ('pathway_level - old.php');
	include ('course_level - old.php');
	include ('about.php');
	include ('project_drilldown.php');
	include ('course_quality.php');
	include ('demographics.php');
			
	// Front Controller
	function check_user($page) {
	if (isset($_SESSION["user_name"]) && $_SESSION["user_name"] == 'LEONIDAS'){
		echo showPage($page);
	}
	else{
		if (!empty($_POST["user_pass"])) {
			if ($_POST["user_pass"] == 'KINGARTHUR!') {
				$_SESSION["user_name"] = 'LEONIDAS';
				$_SESSION["login_message"] = 'Welcome to the Monitoring and Evaluation Portal of Project SPARTA';
				echo showPage($page);
			}
			else {
				$_SESSION["login_message"] = 'Invalid passcode';
				echo showPage('login');
			}
		}
		else {
			$_SESSION["login_message"] = ' ';
			echo showPage('login');
		}
	}
	}

	function getPage() {
	if (isset($_GET["page"])) {
		$pageIn = $_GET["page"];
		switch ($pageIn) {
			case 'project_overview':
				showProjectOverview();
				break;
			case 'project_status':
				showProjectStatus();
				break;
			case 'overall_snapshot':
				showOverallSnapshot();
				break;
			case 'pathway_level':
				showPathwayLevel();
				break;
			case 'project_drilldown':
				showProjectDrilldown();
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
			case "logout":
				session_unset();
				session_destroy();
				break;
			default:
				showAbout();
				break;
		}
	}
	else {
		showAbout();
	}
	return $pageOut;
	}

	if (!isset($_SESSION)){
		session_start();
	}

	$page = getPage();
	check_user($page);
?>

		</div>

<script src="resources/app_js.js"></script>

<script>
$(document).ready(function() {
		$.ajax({
				type: "GET",
				url: "master-data.csv",
				dataType: "text",
				success: function(data) {
					window.mdata = data;
					console.log('mdata loaded');


					// To get count per pathway: getCounts2(column, name of category)
					// Ex: ('pathway','Data Scientist')
					// To get count per course: total_enrollees - getCounts2(course, 'Not Enrolled')
					// Ex: total_enrollees - getCounts2('Progress_SP101', 'Not Enrolled')
				}
		 });

});

</script>
</body>

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



</html>