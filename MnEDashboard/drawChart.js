// Overall Snapshot, Pathway and Course drilldowns
function drawChart(chartType, chartTitle, labels, data) {
	//document.getElementById('chartContainer').innerHTML = '<canvas id="myChart"></canvas>';
	
	//console.log(labels);
	//console.log(data);
	//console.log(chartContainer);
	window.chartColors = {
		maroon: 'rgb(128, 0, 0)',
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: 'rgb(54, 162, 235)',
		purple: 'rgb(153, 102, 255)',
		grey: 'rgb(201, 203, 207)',
		black: 'rgb(0,0,0)'
	};

	switch(chartType){

		case 'horizontalBar':
			var ctx = document.getElementById('courseChart').getContext('2d');
			break;
		default:
			var ctx = document.getElementById('pathwayChart').getContext('2d');
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
					fill: false, 
					backgroundColor: window.chartColors.maroon,
					borderColor: window.chartColors.maroon,
					borderDash: [10,5],
					borderWidth: 2,
					categoryPercentage: 0.5,					
					//barPercentage: 0.9,
					barThickness: 5,
					maxBarThickness: 8,
					minBarLength: 2,
					data: data
				},
			]
		},

		// Configuration options go here
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false,
				position: 'bottom', 
				labels: {
					fontColor: '#fff'
				}
			},
				// change title of chart	
			title: {
            display: true,
            text: chartTitle
			},
			
			scales: {
				xAxes: {
					//stacked: true,
					gridLines: {
						offsetGridLines: false
					},
					ticks: {
						beginAtZero: true
					}
				},
				
				yAxes: {
					//stacked: true,
					ticks: {
						beginAtZero: true
					}
				}
			}
		}
	})
}


function getCount(pathway) {
	active_list = [];
	inactive_list = [];
	unstarted_list = [];
	dropped_list = [];
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			var active = dataArray[0];
			var inactive = dataArray[1];
			var unstarted = dataArray[2];
			var dropped = dataArray[3];
			var total_enrollees = active + inactive + unstarted + dropped;
			
			//Values displayed in the card
			document.getElementById('active-val').innerHTML = active;
			document.getElementById('inactive-val').innerHTML = inactive;
			document.getElementById('unstarted-val').innerHTML = unstarted;
			document.getElementById('dropped-val').innerHTML = dropped;
			
			//Displayed segment length
			document.getElementById('active-bar').style.width = active/total_enrollees*100 + "%";
			document.getElementById('inactive-bar').style.width = inactive/total_enrollees*100 + "%";
			document.getElementById('dropped-bar').style.width = dropped/total_enrollees*100 + "%";
			document.getElementById('unstarted-bar').style.width = unstarted/total_enrollees*100 + "%";
			
			//Text value in progress bar
			document.getElementById('active-bar').innerHTML = Math.round(active/total_enrollees*100) + "%";
			document.getElementById('inactive-bar').innerHTML = Math.round(inactive/total_enrollees*100) + "%";
			document.getElementById('dropped-bar').innerHTML = Math.round(dropped/total_enrollees*100) + "%";
			document.getElementById('unstarted-bar').innerHTML = Math.round(unstarted/total_enrollees*100) + "%";
			
			for (var i in dataArray[4]) {
				active_list.push(dataArray[4][i]);
			}
			for (var i in dataArray[5]) {
				inactive_list.push(dataArray[5][i]);
			}
			for (var i in dataArray[6]) {
				unstarted_list.push(dataArray[6][i]);
			}
			for (var i in dataArray[7]) {
				dropped_list.push(dataArray[7][i]);
			}
		}
	};
	xmlhttp.open("GET", "extractCount.php?pathway=" + pathway, true);
	xmlhttp.send();
}


function runChart(view) {

	switch(view){
		//Pathway is used as the determinant for the count and 
		case 'Data Scientist':
		case 'Data Associate':
		case 'Data Analyst':
		case 'Data Engineer':
		case 'Analytics Manager':
		case 'Data Steward':
			getCount(view);
			break;

		//Course progress bar
		default: 
			var completed = getCounts2('Progress_'+view, 'Completed');
			var in_progress = getCounts2('Progress_'+view, 'In Progress');
			var not_started = getCounts2('Progress_'+view, 'Not Started');
			var not_enrolled = getCounts2('Progress_'+view, 'Not Enrolled');
			var total_enrollees = completed + in_progress + not_started;

			document.getElementById('completed-val').innerHTML = completed;
			document.getElementById('in-progress-val').innerHTML = in_progress;
			document.getElementById('unstarted-val').innerHTML = not_started;
			//document.getElementById('unstarted-val').innerHTML = unstarted;

			document.getElementById('completed-bar').style.width = completed/total_enrollees*100 + "%";
			document.getElementById('in-progress-bar').style.width = in_progress/total_enrollees*100 + "%";
			document.getElementById('unstarted-bar').style.width = not_started/total_enrollees*100 + "%";
			//document.getElementById('unstarted-bar').style.width = unstarted/total_enrollees*100 + "%";

			document.getElementById('completed-bar').innerHTML = Math.round(completed/total_enrollees*100) + "%";
			document.getElementById('in-progress-bar').innerHTML = Math.round(in_progress/total_enrollees*100) + "%";
			document.getElementById('unstarted-bar').innerHTML = Math.round(not_started/total_enrollees*100) + "%";
			//document.getElementById('unstarted-bar').innerHTML = Math.round(unstarted/total_enrollees*100) + "%";
			break;
			
	}
}