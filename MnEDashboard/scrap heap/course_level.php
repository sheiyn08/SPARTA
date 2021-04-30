<?php
function showCourseLevel() {
?>
<script>
document.getElementById('menu-course').className += " sparta-maroon-hover w3-round";
</script>


<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>COURSE DRILLDOWN</b></h2>

	<br/><br/>
	<div class="w3-container">
    <div class="w3-row dropdown">
		<button onclick="myFunction()" class="dropbtn">Select Course</button>
		  <div id="myDropdown" class="dropdown-content">
			<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
			<a href="#course1">Dashboards and Drill-down Analytics</a>
			<a href="#course2">Getting Grounded on Analytics</a>
			<a href="#course3">Data Management Fundamentals</a>
			<a href="#course4">Computing in Python</a>
			<a href="#course5">Data Visualization Fundamentals</a>
			<a href="#course6">Data-driven Research Fundamentals</a>
			<a href="#course7">SQL for Business Users</a>
			<a href="#course8">Statistical Analysis and Modeling using Excel</a>
			<a href="#course9">Essential Excel Skills for Business</a>
			<a href="#course10">Advanced Data Engineering</a>
			<a href="#course11">Data Visualization using Python and Tableau</a>
			<a href="#course12">Enterprise Data Governance</a>
			<a href="#course13">Experimental Design and Analysis</a>
			<a href="#course14">Python for Data Engineering</a>
			<a href="#course15">SQL for Data Engineering</a>
			<a href="#course16">Statistical Analysis and Modeling using SQL and Python</a>
			<a href="#course17">Storytelling using Data</a>
			<a href="#course18">Analytics Applications in Finance and Risk</a>
			<a href="#course19">Analytics Applications in Operations</a>
			<a href="#course20">Data Science and Analytics Project Management</a>
			<a href="#course21">Data Science and Machine Learning using Python</a>
			<a href="#course22">Deep Learning using Python</a>
			<a href="#course23">Designing and Building Data Products</a>
			<a href="#course24">Improving Customer and Employee Experience using Analytics</a>
			<a href="#course25">Applied Analytics in Public Finance and Budgeting</a>
			<a href="#course26">Applied Analytics in Public Human Resource Management</a>
			<a href="#course27">Data Driven Policy Analysis</a>
			<a href="#course28">Data Engineering in E-governance Systems</a>
			<a href="#course29">Smart City and E-governance</a>
			<a href="#course30">Urban Planning in the Fourth Industrial  Revolution</a>

		  </div>
	</div>
	</div>	
</div>

<br/><br/>
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
<br/><br/>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>


<br/><br/><br/><br/><br/>

<script>
Array.prototype.contains = function(v) {
  for (var i = 0; i < this.length; i++) {
    if (this[i] === v) return true;
  }
  return false;
};

Array.prototype.unique = function() {
  var arr = [];
  for (var i = 0; i < this.length; i++) {
    if (!arr.contains(this[i])) {
      arr.push(this[i]);
    }
  }
  return arr;
}

// function input: column name; returns a dictionary of count of items in column
// x = name of column you want to count

function getCounts(x, y= "") {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
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
        return counts[y];
      }

		}
	};
	xmlhttp.open("GET", "files/extractData.php?file=master-data", true);
	xmlhttp.send();
}
//console.log(getCounts('learner_class'));
getCounts('learner_class');
console.log(getCounts('learner_class', 'Inactive'));







function generateGraph() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
      var learner_class=[];
      for (var i = 1; i < dataArray.length - 1; i++) {
        learner_class.push(dataArray[i][2]);
      }
      var unique_learner_class = learner_class.unique();
      console.log(unique_learner_class);
      var counts = learner_class.reduce(function (acc, curr) {
        if (typeof acc[curr] == 'undefined') {
          acc[curr] = 1;
        } else {
          acc[curr] += 1;
        }
        return acc;
      }, {});
      console.log(counts);
      for (var z=0; z< unique_learner_class.length; z++) {
        console.log(unique_learner_class[z], counts[unique_learner_class[z]]);
      }
		}
	};
	xmlhttp.open("GET", "files/extractData.php?file=master-data", true);
	xmlhttp.send();
}

//generateGraph();

</script>




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

.dropbtn {
  background-color: #686868;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #525252;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>









<?php
}
