
function getCount(pathway) {
	active_list = [];
	inactive_list = [];
	unstarted_list = [];
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataArray = JSON.parse(this.responseText);
			document.getElementById('activeBox').innerHTML = dataArray[0];
			document.getElementById('inactiveBox').innerHTML = dataArray[1];
			document.getElementById('droppedBox').innerHTML = dataArray[2];
			for (var i in dataArray[3]) {
				active_list.push(dataArray[3][i]);
			}
			for (var i in dataArray[4]) {
				inactive_list.push(dataArray[4][i]);
			}
			for (var i in dataArray[5]) {
				unstarted_list.push(dataArray[5][i]);
			}
		}
	};
	xmlhttp.open("GET", "extractCount.php?pathway=" + pathway, true);
	xmlhttp.send();
}

function displayRecords(learnerClass) {
	switch (learnerClass) {
		case "Active":
			var tableresult = active_list;
			break;
		case "Inactive":
			var tableresult = inactive_list;
			break;
		case "Unstarted":
			var tableresult = unstarted_list;
			break;
	}
	console.log(tableresult);
	table = "<table class=\"w3-table w3-striped w3-hoverable\"><tr><td>username</td><td>pathway</td><td>learner_class</td>	<td>learner_behavior</td><td>learner_progress</td><td>SP101</td>	<td>SP201</td><td>SP401</td><td>Number of Enrolled Courses</td>	<td>Progress_SP101</td><td>Progress_SP201</td><td>Progress_SP401</td>	<td>Number of In-Progress Courses</td><td>Number of Completed Courses</td><td>Last_Login (days)</td></tr>";
	for (i = 0; i < tableresult.length; i++) {
		table += "<tr>";
		for (j = 0; j < tableresult[i].length; j++) {
			table += "<td>"+tableresult[i][j]+"</td>";
		}
		table += "</tr>";
	}
	table += "</table>";
	document.getElementById('learnerTable').innerHTML = table;
}
