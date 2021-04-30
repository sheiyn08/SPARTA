<?php
$credentials = [];
$screen_name = [];
$file = fopen('credentials.txt', "r"); 
while (!feof($file)) {
	$result[] = fgetcsv($file);
}
foreach ($result as $x) {
	$credentials[$x[0]] = $x[1];
	$screen_name[$x[0]] = $x[2];
}
fclose($file);

if ($_POST) {
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$user = $_POST['username'];		
		$pw = $_POST['password'];
		if ($credentials[$user] == $pw) {
			$_SESSION['logged_in'] = 'Success';
			header("Refresh:0;");
			$status = 'Success';
			$_SESSION['user'] = $screen_name[$user];
		} else {	
			$status = 'Wrong user and password.';
		}
	} else {
		$status = 'Please supply username and password.';
	}
} else {
	$status = 'Please supply user and password.';
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sparta Monitoring Portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>
		<div class="w3-bar w3-gray">
			<div class="w3-bar-item w3-padding">Sparta Monitoring Portal, please log-in</div>
			<div id="status" class="w3-right w3-bar-item"></div>
		</div>
		<form class="w3-form" action="." method="post">
			<input class="w3-input" type="text" name="username" placeholder="Input username"></input>
			<input class="w3-input" type="password" name="password" placeholder="Input password"></input>
			<div class="w3-input"><?php echo $status;?></div>
			<button class="w3-button w3-maroon" type="submit" onclick="checkCredentials();">Submit</button>
		</form>
	</body>
</html>	