<?php
if (!isset($_SESSION)) {
	session_start();
	if ($_POST) {
		if (isset($_POST['logout'])) {
			session_unset();
			session_destroy();
		}
	}
}

if (!isset($_SESSION['logged_in'])) {
	include('login.php');
} else {
	include('home.php');
}