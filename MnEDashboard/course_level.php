<?php
function showCourseLevel() {
?>


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

<script>
document.getElementById('menu-course').className += " sparta-maroon-hover w3-round";
</script>

<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
	<h2 class="din-bold w3-margin-top"><b>COURSE DRILLDOWN</b></h2>
</div>
	
<div id="chartContainer" class="w3-padding w3-center chart-container">
<canvas id="courseChart" width="847" height="423" style="display: block; height: 200px; width: 770px;">
</div>


<div class="w3-container">
    <div class="w3-row dropdown"><br/><br/>

	<select class="w3-select" id="detail" onchange="runChart(this.value);">
		<option value="">Select Course:</option>
		<option value="SP101">SP101 Getting Grounded on Analytics</option>
		<option value="SP102">SP102 Designing and Building Data Products</option>
		
		<option value="SP201">SP201 Essential Excel Skills for Business</option>
		<option value="SP202">SP202 Computing in Python</option>
		<option value="SP203">SP203 SQL for Business Users</option>
		
		<option value="SP301">SP301 Data Management Fundamentals</option>
		<option value="SP302">SP302 Enterprise Data Governance</option>
		
		<option value="SP401">SP401 Dashboards and Drill-down Analytics</option>
		
		<option value="SP501">SP501 Data Visualization Fundamentals</option>
		<option value="SP502">SP502 Data Visualization using Python and Tableau</option>
		<option value="SP503">SP503 Storytelling using Data</option>
		
		<option value="SP601">SP601 Data-driven Research Fundamentals</option>
		<option value="SP602">SP602 Experimental Design and Analysis</option>
		
		<option value="SP701">SP701 SQL for Data Engineering</option>
		<option value="SP702">SP702 Python for Data Engineering</option>
		<option value="SP703">SP703 Advanced Data Engineering</option>
		
		<option value="SP801">SP801 Statistical Analysis and Modeling using Excel</option>
		<option value="SP802">SP802 Statistical Analysis and Modeling using SQL and Python</option>
		
		<option value="SP901">SP901 Data Science and Machine Learning using Python</option>
		<option value="SP902">SP902 Deep Learning using Python</option>
		
		<option value="SP1001">SP1001 Improving Customer and Employee Experience using Analytics</option>
		<option value="SP1002">SP1002 Analytics Applications in Operations</option>
		<option value="SP1003">SP1003 Analytics Applications in Finance and Risk</option>
		<option value="SP1004">SP1004 Data Science and Analytics Project Management</option>
		<option value="SP1005">SP1005 Data Driven Policy Analysis</option>
		<option value="SP1006">SP1006 Applied Analytics in Public Human Resource Management</option>
		<option value="SP1007">SP1007 Applied Analytics in Public Finance and Budgeting</option>
		<option value="SP1008">SP1008 Data Engineering in E-governance Systems</option>
		<option value="SP1009">SP1009 Urban Planning in the Fourth Industrial Revolution</option>
		<option value="SP1010">SP1010 Smart City and E-governance</option>
	</select>
	</div>
</div>
	
<br/>		  


<!--class w3-cell-row uses the whole width of the screen -->
<div class="w3-cell-row w3-container">
	<div class="w3-row w3-col l1 m1 w3-hide-small w3-center icon">
	<i class="fa fa-users fa-2x "></i>
	</div>&nbsp;&nbsp;
	<div id="completed-bar" class="w3-green w3-center w3-container w3-cell prog-bar"></div>
	<div id="in-progress-bar" class="w3-yellow w3-center w3-container w3-cell prog-bar"></div>
	<div id="unstarted-bar" class="w3-orange w3-center w3-container w3-cell prog-bar"></div>

</div>

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

<br/>
<script>

function runThis() {
  var result = $.csv.toArrays(mdata);
  console.log(result);
}
</script>

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

<div class="w3-row w3-padding">

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-green w3-center">
		  <h4>Active</h4>
		</header>
		<div class="w3-container">
		  <p id="completed-val" class="w3-center">&nbsp;</p>
		</div>
		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
		  <p>In-progress with this course and whose last session is at most 30 days ago</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
		  <p>In-progress with this course and whose last session is at most 30 days ago</p>
		</footer>
	</div>

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-yellow w3-center">
		  <h4>Inactive</h4>
		</header>

		<div class="w3-container">
		  <p id="in-progress-val" class="w3-center">&nbsp;</p>
		</div>

		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
		  <p>In-progress with this course and whose last session is over 30 days ago but at most 180 days ago</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
		  <p>In-progress with this course and whose last session is over 30 days ago but at most 180 days ago</p>
		</footer>

	</div>

	<div class="w3-card-2 w3-col l2 m12 s12 w3-margin">
		<header class="w3-container w3-orange w3-center">
			<h4>Unstarted</h4>
		</header>

		<div class="w3-container">
			<p id="unstarted-val" class="w3-center">&nbsp;</p>
		</div>

		<footer class="w3-container w3-light-gray w3-center w3-hide-small w3-hide-medium" style="height: 210px;">
			<p>Enrolled, but has not yet started</p>
		</footer>
		<footer class="w3-container w3-light-gray w3-center w3-hide-large" style="height: 120px;">
			<p>Enrolled, but has not yet started</p>
		</footer>
	</div>

</div>


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
