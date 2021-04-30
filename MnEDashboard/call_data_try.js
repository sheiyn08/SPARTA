function callCSVtry() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			var dataEntries = dataArray.feed.entry;

			var labels = [];
			var values = [];
			var values1 = [];
			var values2 = [];
			var values3 = [];
			var values4 = [];
			var values5 = [];
			var values6 = [];

			var table_result = '';			
			table_result += '<tr><th>Course</th><th>Task</th><th>Status</th><th>Target Start Date</th><th>Target End Date</th><th>Actual Start Date</th><th>Actual End Date</th><th>Remarks</th></tr>';
			
			for (i = 2; i < dataEntries.length; i++) {
				if (dataEntries[i].gs$cell.col == 2){	labels.push(dataEntries[i].content.$t); 
				} else if (dataEntries[i].gs$cell.col == 3) {values.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 4) {values1.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 5) {values2.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 6) {values3.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 7) {values4.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 8) {values5.push(dataEntries[i].content.$t);
				} else if (dataEntries[i].gs$cell.col == 9) {values6.push(dataEntries[i].content.$t);
				}
			}
			
			for (var i in dataEntries) {			
			table_result += '<tr><td>' + labels[i] + '</td><td>' + values[i]+  '</td><td>' + values1[i]+  '</td><td>' + values2[i]+  '</td><td>' + values3[i]+  '</td><td>' + values4[i]+  '</td><td>' + values5[i]+  '</td><td>' + values6[i]+  '</td></tr>';
			}

			console.log(labels);
			console.log(values);
			console.log(values1);
			console.log(values2);
			console.log(values3);
			console.log(values4);
			console.log(values5);
			console.log(values6);

			document.getElementById('tableContainer').innerHTML = table_result; 
		}
	}
	
	xmlhttp.open("GET", "extract_gsheet.php", true);
	xmlhttp.send();	
}