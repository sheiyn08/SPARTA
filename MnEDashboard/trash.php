// performance_overview.php
<script>
	$(document).ready(function() {
      $.ajax({
          type: "GET",
          url: "files/master-data.csv",
          dataType: "text",
          success: function(data) {
            window.mdata = data;
				var values = ['active', 'inactive', 'dropped', 'unstarted'];
				var active = getCounts2('learner_class', 'Active');
				var inactive = getCounts2('learner_class', 'Inactive');
				var dropped = getCounts2('learner_class', 'Dropped Out');
				var unstarted = getCounts2('learner_class', 'Unstarted');
				var total_enrollees = active + inactive + dropped + unstarted;
				progressvalue = total_enrollees / 30000 * 100;
				console.log(total_enrollees);
				document.getElementById('total-enrollees').innerHTML = total_enrollees;
				//Text value displayed
				document.getElementById('active-val').innerHTML = active;
				document.getElementById('inactive-val').innerHTML = inactive;
				document.getElementById('dropped-val').innerHTML = dropped;
				document.getElementById('unstarted-val').innerHTML = unstarted;
				//Segment length
				document.getElementById('active-bar').style.width = active/total_enrollees*100 + "%";
				document.getElementById('inactive-bar').style.width = inactive/total_enrollees*100 + "%";
				document.getElementById('dropped-bar').style.width = dropped/total_enrollees*100 + "%";
				document.getElementById('unstarted-bar').style.width = unstarted/total_enrollees*100 + "%";
				//Text value in progress bar
				document.getElementById('active-bar').innerHTML = Math.round(active/total_enrollees*100) + "%";
				document.getElementById('inactive-bar').innerHTML = Math.round(inactive/total_enrollees*100) + "%";
				document.getElementById('dropped-bar').innerHTML = Math.round(dropped/total_enrollees*100) + "%";
				document.getElementById('unstarted-bar').innerHTML = Math.round(unstarted/total_enrollees*100) + "%";
				//old progressbar
				//document.getElementById('progress10').style.width = progressvalue + "%";
				//document.getElementById('progress10').innerHTML = Math.round(progressvalue) + "%";
				//document.getElementById('progress10a').innerHTML = Math.round(progressvalue) + "%";

            var labels = ['Data Associate', 'Data Scientist', 'Analytics Manager', 'Data Analyst', 'Data Engineer', 'Data Steward'];
            var pathway_data = [];
            for (var i=0; i<= labels.length; i++) {
              pathway_data.push(getCounts2('pathway',labels[i]))
            }
			//console.log(pathway_data);
            drawChart('bar', 'Distribution of Learners per Pathway', labels, pathway_data);

            var course_labels = ['SP101', 'SP201', 'SP401'];
            var course_data = [];
            for (var i=0; i<= course_labels.length; i++) {
              course_data.push((total_enrollees-getCounts2(course_labels[i],'Not Enrolled')))
            }
			//console.log(course_data);
            drawChart('horizontalBar', 'Distribution of Learners per Course', course_labels, course_data);


          }
       });

  });
</script>

//pathway_level.php

		<script>
		$(document).ready(function() {
			$.ajax({
				type: "GET",
				url: "files/master-data.csv",
				dataType: "text",
				success: function(data) {
				  window.mdata = data;

				  var labels = ['Data Associate', 'Data Scientist', 'Analytics Manager', 'Data Analyst', 'Data Engineer', 'Data Steward'];
				  var pathway_data = [];
				  for (var i=0; i<= labels.length; i++) {
					pathway_data.push(getCounts2('pathway',labels[i]))
				  }

				  drawChart('bar', 'Distribution of Learners per Pathway', labels, pathway_data);

				  // To get count per pathway: getCounts2(column, name of category)
				  // Ex: ('pathway','Data Scientist')
				  // To get count per course: total_enrollees - getCounts2(course, 'Not Enrolled')
				  // Ex: total_enrollees - getCounts2('Progress_SP101', 'Not Enrolled')
				}
			 });

		});

		</script>


//cours_level.php
<script>
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "files/master-data.csv",
        dataType: "text",
        success: function(data) {
          window.mdata = data;

					var active = getCounts2('learner_class', 'Active');
					var inactive = getCounts2('learner_class', 'Inactive');
					var dropped = getCounts2('learner_class', 'Dropped Out');
					var unstarted = getCounts2('learner_class', 'Unstarted');
					var total_enrollees = active + inactive + dropped + unstarted;

					var course_labels = ['SP101', 'SP201', 'SP401'];
					var course_data = [];
					for (var i=0; i<= course_labels.length; i++) {
						course_data.push((total_enrollees-getCounts2(course_labels[i],'Not Enrolled')))
					}

          drawChart('horizontalBar', 'Distribution of Learners per Course', course_labels, course_data);

          // To get count per pathway: getCounts2(column, name of category)
          // Ex: ('pathway','Data Scientist')
          // To get count per course: total_enrollees - getCounts2(course, 'Not Enrolled')
          // Ex: total_enrollees - getCounts2('Progress_SP101', 'Not Enrolled')
        }
     });

});

</script>