<?php

function showProjectOverview() {
?>
<script>
document.getElementById('menu-poverview').className += " sparta-maroon-hover w3-round";
generateProgressBar();

</script>

	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l12 w3-padding">
		<h2 class="din-bold w3-margin-top"><b>PROJECT OVERVIEW</b></h2>

	<br/><br/>
	<div class="w3-container w3-large">

	<section id="details" style="margin:auto;">
    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-city fa-2x "></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>SMEs Onboarded</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell1"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 s3 w3-hide-small w3-margin-left">
			<div id="progress1" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress1a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>

	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="far fa-file-alt fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Documents Submission</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell2"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress2" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress2a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-video fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Video Production Shoot</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell3"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress3" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress3a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>


    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-photo-video fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Video Post-Production Edit</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell4"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress4" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress4a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-user-check fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Beta Testing</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell5"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress5" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress5a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-upload fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Launched Courses</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell6"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress6" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress6a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="far fa-check-circle fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Accepted</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell7"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress7" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress7a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>
	<br/><br/>

    <div class="w3-row">
		<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
			<i class="fas fa-exclamation-triangle fa-2x"></i>
		</div>&nbsp;&nbsp;
		<div class="w3-row w3-col l3 m3 s5">
			<p>Issues</p>
		</div>
		<div class="w3-row w3-col l2 m2 s3 box1">
			<h3 id="cell8"></h3>
		</div>
		<div class="w3-grey w3-col l5 m5 w3-hide-small w3-margin-left">
			<div id="progress8" class="progress w3-container w3-green w3-center"></div>
		</div>
		<div id="progress8a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
	</div>

	<br/><br/>

	</section>
	</div>
	</div>

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
</style>

<?php
}
