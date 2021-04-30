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
		
<!--from index.php-->
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


<!--from overall_snapshot-->
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



			// To get count per pathway: getCounts2(column, name of category)
			// Ex: ('pathway','Data Scientist')
			// To get count per course: total_enrollees - getCounts2(course, 'Not Enrolled')
			// Ex: total_enrollees - getCounts2('Progress_SP101', 'Not Enrolled')
          }
       });

  });
</script>


<!-- from demographics -->
<!-- defines area within chart container
<div class="w3-half"><canvas id="byAge" style="height: 250px;"></canvas></div>
<div class="w3-half"><canvas id="byEducation" style="height: 250px;"></canvas></div>
<br/>
<div class="w3-half"><canvas id="byGender" style="height: 250px;"></canvas></div>
<div class="w3-half"><canvas id="byAffiliation" style="height: 250px;"></canvas></div>
</div-->

<!--script>
var age_labels = ['Boomer', 'Gen X', 'Millenial', 'Gen Z', 'No Data Entry'];
var age_data = [60, 1372, 8798, 19, 434];
var gender_labels = ['Female', 'Male',  'Other/ Prefer not to Say', 'No Data Entry'];
var gender_data = [4320, 5865, 79, 419];
var education_labels = ['Secondary Education', 'Associate Degree', "Bachelor's Degree", "Master's Degree", 'Doctoral Degree', 'No Data Entry'];
var education_data = [711, 184, 7644, 1289, 156, 699];
var affiliation_labels = ['Academe', 'Private', 'Government', 'Not Indicated'];
var affiliation_data = [1033, 5298, 1933, 2419];

drawChart4('doughnut', 'Distribution of Learners by Age', age_labels, age_data, 'byAge');
drawChart4('doughnut', 'Distribution of Learners by Gender', gender_labels, gender_data, 'byGender');
drawChart4('doughnut', 'Distribution of Learners by Educational Attainment', education_labels, education_data, 'byEducation');
drawChart4('doughnut', 'Distribution of Learners by Affiliation', affiliation_labels, affiliation_data, 'byAffiliation');
</script-->


<!--
// Removed from demographics.php: Demographics charts, Google Analytics copy
function drawChart4(chartType, chartTitle, labels, data, chartContainer) {
	
	window.chartColors = {
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: 'rgb(54, 162, 235)',
		purple: 'rgb(153, 102, 255)',
		grey: 'rgb(201, 203, 207)',
		black: 'rgb(0, 0, 0)',
		maroon_1: 'rgb(109, 0, 0)',
		maroon_2: 'rgb(129, 42, 31)',
		maroon_3: 'rgb(148, 72, 60)',
		maroon_4: 'rgb(166, 101, 89)',
		maroon_5: 'rgb(182, 130, 121)',
		maroon_6: 'rgb(196, 160, 153)'
	};

	switch(chartContainer){
		case 'byAge':
			var ctx = document.getElementById('byAge').getContext('2d');
			break;
		case 'byEducation':
			var ctx = document.getElementById('byEducation').getContext('2d');
			break;
		case 'byGender':
			var ctx = document.getElementById('byGender').getContext('2d');
			break;
		default:
			var ctx = document.getElementById('byAffiliation').getContext('2d');
			break;
	}
	
	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: chartType,

		// The data for our dataset
		data: {
			labels: labels,
			datasets: [
				{
					label: "Series 1",
					fill: 'start', 
					backgroundColor: [
						window.chartColors.maroon_1,
						window.chartColors.maroon_2,
						window.chartColors.maroon_3,
						window.chartColors.maroon_4,
						window.chartColors.maroon_5,
						window.chartColors.maroon_6				
					],
					borderWidth: 1, 
					data: data
				}
			]
		},

		// Configuration options go here
		options: {
			maintainAspectRatio: false,
			legend: {
				display: true,
				position: 'right', 
				labels: {
					fontSize: 14,
					fontColor: window.chartColors.black
				}
			},
			// change title of chart	
			title: {
				display: true,
				text: chartTitle,
				fontSize: 16
			},
		}
	})
}-->