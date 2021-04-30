

// script used in: project overview
function generateProgressBar() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			for (var i = 1; i < dataArray.length - 1; i++) {
		var celldata= dataArray[i][1];		
        var progressvalue = dataArray[i][1]/30*100;
		document.getElementById('cell' + i).innerHTML = celldata;
        document.getElementById('progress' + i).style.width = progressvalue + "%";
        document.getElementById('progress' + i).innerHTML = Math.round(progressvalue) + "%";
        document.getElementById('progress' + i + 'a').innerHTML = Math.round(progressvalue) + "%";
		console.log();
			}
		}
	};
	xmlhttp.open("GET", "files/extractData.php?file=project-overview", true);
	xmlhttp.send();
}


function getCounts2(x,y) {
  var dataArray = $.csv.toArrays(mdata);
	console.log(dataArray);
  var column = dataArray[0].indexOf(x);
  var tempColArray=[];
  for (var i = 1; i < dataArray.length - 1; i++) {
    tempColArray.push(dataArray[i][column]);
  }
  var counts = tempColArray.reduce(function (acc, curr) {
    if (typeof acc[curr] == 'undefined') {
      acc[curr] = 1;
    } else {
      acc[curr] += 1;
    }
    return acc;
  }, {});
//    console.log(counts);

  if (y !== "") {
		if (typeof counts[y] == 'undefined') {
			return 0;
		}
    return counts[y];
  }
}

function getPathwayCounts(x) {
	var dataArray = $.csv.toArrays(mdata);
  var column = dataArray[0].indexOf(x);


}
