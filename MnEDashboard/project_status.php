<?php

function showProjectStatus() {
?>
<script>
document.getElementById('menu-status').className += " sparta-maroon-hover w3-round"
</script>
<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>PROJECT STATUS</b></h2>

	<br/><br/>
	<div class="w3-container">
    <div class="w3-row">
			<div class="w3-col l12">
				<div class="w3-row w3-col l2 m2 s3 box1">
					<h3 id="project-status-completed"></h3>
				</div>
				<div class="w3-grey w3-col l9 m5 s3 w3-hide-small  w3-margin-left">
					<div id="progress9" class="progress w3-container w3-green w3-center"></div>
				</div>
				<div id="progress9a" class="progress w3-green w3-col l5 m5 s3 w3-hide-medium w3-hide-large w3-margin-left"></div>
			</div>
		</div>
	<br/><br/>


    <table id="project-status" class="w3-table-all w3-hoverable" style="font-size: 18px;">
      <tr class="w3-black">
        <th>Course</th>
        <th>Status</th>
      </tr>
			<?php
			$word = "Launch";
			$f = fopen("files/project data sample try.csv", "r");
				while (($data = fgetcsv($f, 1000, ",")) !== FALSE) {
					if(strpos($data[2], $word) !== false){
					  echo "<tr><td>" . $data[1] . "</td> \n";
					  echo "<td class='status-color'>" . $data[3] . "</td></tr>";
							}
			}
			fclose($f);
			?>
    </table>
	<br/><br/>
	</div>
</div>

	
	<script>
	var statusColor = document.getElementsByClassName('status-color');
	var completed_ctr=0;
	for(var i = 0; i < statusColor.length; i++) {
		switch (statusColor[i].innerHTML) {
			case 'Completed':
				statusColor[i].className += " w3-green";
				completed_ctr++;
				break;
			case 'Delayed':
				statusColor[i].className += " w3-red";
				break;
			case 'On Schedule':
				statusColor[i].className += " w3-yellow";
				break;
			default:
				break;
		}
	}
	document.getElementById('project-status-completed').innerHTML = completed_ctr;
	var progressvalue = completed_ctr/30*100;
	document.getElementById('progress9').style.width = progressvalue + "%";
	document.getElementById('progress9').innerHTML = Math.round(progressvalue) + "%";
	document.getElementById('progress9a').innerHTML = Math.round(progressvalue) + "%";

	</script>


<script>
$(document).ready(function() {
	document.getElementById("project-status").deleteRow(1);
    $('#project-status').DataTable();
} );
</script>


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
