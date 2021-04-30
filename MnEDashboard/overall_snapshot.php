<?php

function showOverallSnapshot() {
?>

<style>
.progress {
  height: 50px;
  font-size:24px;
  text-align: left;
  padding: 5px;
}

@media (max-width:768px) {
  .progress {
    text-align:center;
  }
}

.prog-bar{
	font-size: 20px;
	color: #FFFFFF!important;
	height: 20px;
	line-height: 20px;
	padding: 15px;
	text-align: center;
}


</style>

<script>
document.getElementById('menu-lpoverview').className += " sparta-maroon-hover w3-round"
</script>

<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>PERFORMANCE OVERVIEW</b></h2>
</div>

<div class="w3-bar w3-gray">
	<div id="status" class="w3-right w3-bar-item"></div>
	<div class="w3-right w3-bar-item">Welcome <?php echo $_SESSION['user'];?></div>
</div>
<div class="w3-row">
	<div class="w3-quarter w3-padding-small">
		<select class="w3-select" onchange="callData(this.value,'bar');">
		<!--select class="w3-select" onchange="callData(this.value,'horizontalBar');"-->
			<option value="">Select:</option>
			<option value="pathway">Pathway Overview</option>
			<option value="course_detail">Course Overview</option>		
		</select>
	</div>
	<div class="w3-threequarter w3-padding-small">
		<div id="chartContainer"><div class="w3-grey" style="height:50vh;">&nbsp;</div></div>
		<table id="tableContainer" class="w3-table w3-hoverable w3-bordered w3-striped">
		</table>
	</div>
</div>
<script src="call_data.js"></script>

<div>
	<div class="w3-container">
    <div class="w3-row">
	
	<div class="w3-col l12">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
		<i class="fa fa-users fa-2x "></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l4 m4 s5">
			<h3 style="text-align: center;">Total Enrollees</h3>
		</div>
		<div class="w3-row w3-col l3 m3 s3 box1">
			<h3 id="total-enrollees"></h3>
		</div>
	</div>
	</div>

	</div>
</div>

<!--class w3-cell-row uses the whole width of the screen -->
<div class="w3-cell-row w3-container">
	<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
	<i class="fa fa-2x "></i>
	</div>&nbsp;&nbsp;
	<div id="active-bar" class="w3-green w3-container w3-cell prog-bar"></div>
	<div id="inactive-bar" class="w3-yellow w3-container w3-cell prog-bar"></div>
	<div id="dropped-bar" class="w3-orange w3-center w3-container w3-cell prog-bar"></div>
	<div id="unstarted-bar" class="w3-grey w3-center w3-container w3-cell prog-bar"></div>

</div>
<br/>
<div class="w3-row w3-padding">

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-green w3-center">
		  <h4>Active</h4>
		</header>
		<div class="w3-container">
		  <p id="active-val" class="w3-center">&nbsp;</p>
		</div>
		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
		  <p>In-progress in at least 1 course and whose last session is at most 30 days ago</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
		  <p>In-progress in at least 1 course and whose last session is at most 30 days ago</p>
		</footer>
	</div>

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-yellow w3-center">
		  <h4>Inactive</h4>
		</header>

		<div class="w3-container">
		  <p id="inactive-val" class="w3-center">&nbsp;</p>
		</div>

		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
		  <p>In-progress in at least 1 course and whose last session is over 30 days ago but at most 180 days ago</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
		  <p>In-progress in at least 1 course and whose last session is over 30 days ago but at most 180 days ago</p>
		</footer>

	</div>

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-orange w3-center">
			<h4>Dropped Out</h4>
		</header>

		<div class="w3-container">
			<p id="dropped-val" class="w3-center">&nbsp;</p>
		</div>

		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
			<p>In-progress in at least 1 course and whose last session is over 180 days ago</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
			<p>In-progress in at least 1 course and whose last session is over 180 days ago</p>
		</footer>
	</div>

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-gray w3-center">
			<h4>Unstarted</h4>
		</header>

		<div class="w3-container">
			<p id="unstarted-val" class="w3-center">&nbsp;</p>
		</div>

		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
			<p>No enrolled courses yet</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
			<p>No enrolled courses yet</p>
		</footer>
	</div>


</div>



<!--Graduate count and graduation rate-->

<div class="w3-row w3-padding">
	<div class="w3-card-2 w3-col l2 s12 w3-margin">
		<div class="w3-container sparta-maroon">
		  <h3 id="grad-count" class="w3-center">0</h3>
		  <p class="w3-center">Graduates</p>
		</div>

	</div>

	<div class="w3-card-2 w3-col l2 s12 w3-margin">
		<div class="w3-container w3-dark-gray">
		  <h3 id="grad-rate" class="w3-center">0%</h3>
		  <p class="w3-center">Graduation Rate</p>
		</div>

	</div>
</div>

<!--script src="drawChart.js"> </script-->

<br/><br/>
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
