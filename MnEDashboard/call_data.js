function callData(detail,charttype) {
	if (detail) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var dataArray = JSON.parse(this.responseText);
				console.log(dataArray);
				var table_result = '';
				var chartobject = {
					labels: [], 
					values: []
				};
				table_result += 
				// change table title to be dynamic
				'<tr><th>Detail</th><th>Count</th></tr>';
				for (var i in dataArray) {
					table_result += '<tr><td>' + dataArray[i][0] + '</td><td>' + dataArray[i][1] +  '</td></tr>';
					chartobject.labels.push(dataArray[i][0]);
					chartobject.values.push(dataArray[i][1]);
				}
				//console.log(chartobject.labels);
				//console.log(chartobject.values);
				drawThisChart(chartobject,charttype);
				document.getElementById('tableContainer').innerHTML = table_result;
				document.getElementById('status').innerHTML = '';
			} else {
				document.getElementById('status').innerHTML = '<img class="w3-spin" src="loader.png" height="20"/>';
			}
		}
		xmlhttp.open("GET", "db_query.php?detail=" + detail, true);
		xmlhttp.send();	
	}
}

function loadColors() {
	window.chartColors = {
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: 'rgb(54, 162, 235)',
		purple: 'rgb(153, 102, 255)',
		grey: 'rgb(201, 203, 207)'
	};
}

function drawThisChart(chartobject, charttype) {
	document.getElementById('chartContainer').innerHTML = '<canvas id="chart" style="height: 50vh;"></canvas>';
	loadColors();
	var ctx = document.getElementById('chart').getContext('2d');
	var chart = new Chart(ctx, {
		type: charttype, 
		
		data: {
			labels: chartobject.labels,
			datasets: [
				{
					label: "Series 1", 
					fill: false,
					backgroundColor: window.chartColors.red, 
					borderColor: window.chartColors.red, 
					borderDash: [10,5], 
					borderWidth: 2, 
					data: chartobject.values
				}
			]
		},
		
		options: {
			legend: {
				display: true,
				position: 'bottom'
			},
			responsive: true,
			maintainAspectRatio: false
		}
	});
	
}

function callCSV() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			var dataEntries = dataArray.feed.entry;
			var labels = [];
			var values = [];
			for (i = 2; i < dataEntries.length; i++) {
				if (dataEntries[i].gs$cell.col == 1) {
					labels.push(dataEntries[i].content.$t); 
				} else if (dataEntries[i].gs$cell.col == 2) {
					values.push(dataEntries[i].content.$t);
				}
			}
			console.log(labels);
			console.log(values);
		}
	}
	xmlhttp.open("GET", "extract_gsheet.php", true);
	xmlhttp.send();	
}

