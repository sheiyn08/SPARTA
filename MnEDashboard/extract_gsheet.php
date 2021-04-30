<?php
	$url = 'https://spreadsheets.google.com/feeds/cells/1iau5sY5L97YTpqjKBlBw9AXyGEU3-QFnXgof7uvLmiM/1/public/full?alt=json';
	$result = file_get_contents($url);
	// Will dump a beauty json :3
	echo $result;

