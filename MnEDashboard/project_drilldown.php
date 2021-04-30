<?php
function showProjectDrilldown() {
?>
<script>
document.getElementById('menu-drilldown').className += " sparta-maroon-hover w3-round";
</script>


<!--create headers-->
<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-container w3-padding w3-col l12">
  <h2 class="w3-margin-top"><b>PROJECT DRILLDOWN</b></h2>
  <br />
  <table id="project-drilldown" class="w3-table-all w3-hoverable">
    <thead>
      <tr>
        <th>Course</th>
        <th>Tasks</th>
        <th>Status</th>
        <th>Target Start Date</th>
        <th>Target End Date</th>
        <th>Actual Start Date</th>
        <th>Actual End Date</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>

<!--read column 2-9 of csv-->			
      <?php
			$f = fopen("files/project data sample try.csv", "r");
		while (($line = fgetcsv($f)) !== false) {
		unset($line[0]);
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
				}
			fclose($f);
			?>
			
    </tbody>
  </table>
  <br/>
</div>

<!--create drilldown and drop first row (csv header)-->			

<script>
$(document).ready(function() {
	document.getElementById("project-drilldown").deleteRow(1);
    $.fn.dataTable.moment('MM/DD/YYYY');
    $('#project-drilldown').DataTable();
	console.log();
} );
</script>

<!--footer-->			
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