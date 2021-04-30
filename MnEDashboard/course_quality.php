<?php

function showCourseQuality() {
?>
<script>
document.getElementById('menu-quality').className += " sparta-maroon-hover w3-round";
</script>

<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-container w3-padding w3-col l12">
  <h2 class="w3-margin-top"><b>COURSE QUALITY</b></h2>
  <br />
  <p id="selectTriggerFilter"><label><b>Filter by course:</b></label><br></p>

  <table id="course-quality-table" class="w3-table-all w3-hoverable">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Course Module</th>
        <th>Module Rating</th>
      </tr>
    </thead>
    <tbody>
      <?php
			$f = fopen("files/course-module-rating.csv", "r");
      while (($line = fgetcsv($f)) !== false) {
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
</div>
<script>
var table = $('#course-quality-table').DataTable({
     "deferRender": true,
    initComplete: function() {
      var column = this.api().column(0);

      var select = $('<select class="filter"><option value=""></option></select>')
        .appendTo('#selectTriggerFilter')
        .on('change', function() {
          var val = $(this).val();
          column.search(val).draw()
        });

       var offices = [];
       column.data().toArray().forEach(function(s) {
       		s = s.split(',');
          s.forEach(function(d) {
            if (!~offices.indexOf(d)) {
            	offices.push(d)
              select.append('<option value="' + d + '">' + d + '</option>');
            }
          })
       })
     }
  });

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

<?php
}
