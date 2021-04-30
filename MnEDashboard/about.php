<?php

function showAbout() {
?>

<script>
document.getElementById('menu-about').className += " sparta-maroon-hover w3-round";
</script>

<div class="w3-col l2 w3-hide-small">&nbsp;</div>
<div class="w3-col l12 w3-container w3-padding">
		<h2 class="din-bold w3-margin-top"><b>ABOUT</b></h2>
		<div class="w3-col w3-justify" style="font-size: 18px;">
		<p>Smarter Philippines through Data Analytics R&ampD, Training and Adoption (Project SPARTA) is a project of Department of Science and Technology- Philippine Council for Industry, Energy and Emerging Technology Research and Development (DOST-PCIEERD) and Development Academy of the Philippines (DAP), in collaboration with MOOCSX PH, Inc. and Analytics Association of the Philippines (AAP). It aims to put in place the necessary online education, research and development mechanisms and infrastructure to, not only enable the industry of data science and analytics, but also to foster smart governance practices.</p>

		<p><b>Project Progress Dashboard –</b> this site will consist of compiled dashboards, charts and reports coming from the Monitoring and Evaluation (M&ampE) reports of this project.</p>
		</div>
</div>

<!--div class="container_login w3-animate-bottom">
	<label for="user_pass"><b>Enter access code  </b></label>
	<input type="password" placeholder="Enter Password" name="user_pass" required>   
	<button type="submit" value="Login">Login</button>
	<p class="w3-text-red">'.$_SESSION["login_message"].'</p>
</div-->

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
