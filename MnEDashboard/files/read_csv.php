<?php

function extractFile($filename) {
	$file = fopen($filename, "r");
	while (! feof($file)) {
		$result[] = (fgetcsv($file));
	}
	return json_encode($result);
	fclose($file);
}

print_r(extractFile("bypathway.csv"));