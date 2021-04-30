<?php

function showPathwayLevel() {
?>
  
<script>
document.getElementById('menu-pathway').className += " sparta-maroon-hover w3-round"
</script>


<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>PATHWAY DRILLDOWN</b></h2>

	<br/><br/>
	<div class="w3-container">
    <div class="w3-row">
	
	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select Pathway</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#a-manager">Analytics Manager</a>
    <a href="#d-analyst">Data Analyst</a>
    <a href="#d-assoc">Data Associate</a>
    <a href="#d-engr">Data Engineer</a>
    <a href="#d-scientist">Data Scientist</a>
    <a href="#d-steward">Data Steward</a>
  </div>
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


<script>
	function extractData() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			headers = dataArray[0];
			console.log(headers);
		} 
	};
	xmlhttp.open("GET", "files/read_csv.php", true);
	xmlhttp.send();
}

	function insertValues() {
		var first=dataArray[1];
		var second=dataArray[2];
		var third=dataArray[3];
		var fourth=dataArray[4];
		var labels = [];
		for (i = 1; i <= 6; i++){
			labels.push(dataArray[i][0]);
		}
		var data = [];
		for (i = 1; i 6; i++){
			data.push(dataArray[i][1]);
		}
		console.log(labels);
		console.log(data);
		console.log(first);
		console.log(second);
		console.log(third);
		document.getElementById('first').innerHTML = first + '%';
		document.getElementById('second').innerHTML = second + '%';
		document.getElementById('third').innerHTML = third + '%';
		<!--document.getElementById('fourth').innerHTML = fourth + '%';

		document.getElementById('first').style.width = first + '%';
		document.getElementById('second').style.width = second + '%';
		document.getElementById('third').style.width = third + '%';
		<!--document.getElementById('fourth').style.width = fourth + '%';-->
extractData();
insertValues();
	}
	
	

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
