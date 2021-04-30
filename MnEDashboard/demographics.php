<?php

function showDemographics() {
?>
<script>
document.getElementById('menu-demographics').className += " sparta-maroon-hover w3-round";
</script>

<!-- page description or title -->
<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-container w3-padding w3-col l12">
  <h2 class="w3-margin-top"><b>LEARNER DEMOGRAPHICS</b></h2>
  <br />
</div>
<div class="w3-bar w3-gray">
	<div id="status" class="w3-right w3-bar-item"></div>
	<div class="w3-right w3-bar-item">Welcome <?php echo $_SESSION['user'];?></div>
</div>
<div class="w3-row">
	<div class="w3-quarter w3-padding-small">
		<select class="w3-select" onchange="callData(this.value,'bar');">
			<option value="">Select Demographic:</option>
			<option value="age">Learner Age</option>
			<option value="generation">Learner Generation</option>
			<option value="gender">Learner Gender</option>
			<option value="affiliation">Affiliation</option>
			<option value="attainment">Educational Attainment</option>
			<option value="graduate_degree">Graduate Degree</option>
			<option value="municipality">Municipality</option>
		</select>
	</div>
	<div class="w3-threequarter w3-padding-small">
		<div id="chartContainer"><div class="w3-grey" style="height:50vh;">&nbsp;</div></div>
		<table id="tableContainer" class="w3-table w3-hoverable w3-bordered w3-striped">
		</table>
	</div>
</div>
<script src="call_data.js"></script>

<hr>

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
