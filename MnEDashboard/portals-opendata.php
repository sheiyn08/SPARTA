<?php

function showOpenData() {
?>

<script>
document.getElementById('menu-opendata').className += " sparta-maroon-hover w3-round"
</script>
<!--div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>OPEN DATA Monitoring</b></h2-->


	
	<div class="w3-row" id="content_padding">
			<div class="w3-container w3-third w3-small">
				<h3>Open Data Monitoring</h3>
				<p>Azure VM monitoring to follow as current account has limited access to the tools within Azure</p>

			 </div>
	</div>

	<!--br/><br/>
	<div class="w3-container">
    <div class="w3-row">
			<div class="w3-col l12">
				<div class="w3-row w3-col l2 m2 s3 box1">
					<h3 id="opendata_numbers"></h3>
				</div>
				<div class="w3-grey w3-col l9 m5 s3 w3-hide-small  w3-margin-left">
					<div id="progress10" class="progress w3-container w3-green w3-center"></div>
				</div>
				<div id="progress10a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
			</div>
	</div>
	</div>
	<br/><br/>
</div>

<div>
  <table class="w3-table-all w3-hoverable" style="font-size: 18px;">
      <tr class="w3-black">
        <th>User</th>
        <th>Status</th>
      </tr>
			<?php
			$f = fopen("files/od_users.csv", "r");
				while (($data = fgetcsv($f, 1000, ",")) !== FALSE) {
          echo "<tr><td>" . $data[0] . "</td> \n";
          echo "<td class='status-color'>" . $data[1] . "</td></tr>";
				}
			fclose($f);
			?>
    </table>
</div>


	<script>
	var statusColor = document.getElementsByClassName('status-color');
	var completed_ctr=0;
	for(var i = 0; i < statusColor.length; i++) {
		switch (statusColor[i].innerHTML) {
			case 'Active':
				statusColor[i].className += " w3-green";
				completed_ctr++;
				break;
			case 'Not Active':
				statusColor[i].className += " w3-red";
				break;
			default:
				break;
		}
	}
	document.getElementById('opendata_numbers').innerHTML = completed_ctr;
	var progressvalue = completed_ctr/30*100;
	document.getElementById('progress10').style.width = progressvalue + "%";
	document.getElementById('progress10').innerHTML = Math.round(progressvalue) + "%";
	document.getElementById('progress10a').innerHTML = Math.round(progressvalue) + "%";
	</script>

<br-->

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