<?php

$selector = $_GET['pathway'];

function extractFile($filename) {
	$file = fopen($filename, "r");
	while (!feof($file)) {
		$result[] = (fgetcsv($file));
	}
	return $result;
	fclose($file);	
}

function countRecord($source, $selector) {
	$active_list = [];
	$inactive_list = [];
	$unstarted_list	= [];
	$dropped_list = [];
	
	$active = 0;
	$inactive = 0;
	$unstarted = 0;
	$dropped = 0;
	
	for ($x = 1; $x <= count($source) - 1; $x++) {
		if ($source[$x][1] == $selector) {
			switch ($source[$x][2]) {
				case "Active":
					$active++;
					$active_list[] = $source[$x];
					break;
				case "Inactive":
					$inactive++;
					$inactive_list[] = $source[$x];
					break;
				case "Unstarted":
					$unstarted++;
					$unstarted_list[] = $source[$x];
					break;
				case "Dropped":
					$dropped++;
					$dropped_list[] = $source[$x];
					break;
				default:
					break;
			}
		}
	}
	$result[] = $active;
	$result[] = $inactive;
	$result[] = $unstarted;
	$result[] = $dropped;
	$result[] = $active_list;
	$result[] = $inactive_list;
	$result[] = $unstarted_list;
	$result[] = $dropped_list;
	return $result;
}

echo json_encode(countRecord(extractFile("files/master-data.csv"), $selector));