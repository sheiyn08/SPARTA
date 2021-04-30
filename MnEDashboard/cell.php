<?php

$row = 1;
$mycsvfile = array(); //define the main array.
if (($handle = fopen("files/project data sample.csv", "r")) !== FALSE) {
   while (($data = fgetcsv($handle)) !== FALSE) {
      $num = count($data);
      $row++;
      $mycsvfile[] = $data; //add the row to the main array.
}
fclose($handle);
}

echo $mycsvfile[3][19];//prints the 4th row, 20th column.

?>