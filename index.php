<?php
// Get File Content
$units = file('units.txt');

function sortUnitOutput( $array ) {
  // Turn the array to a string
  $array1 = implode(" ", $array);
  // Create an array minus the pound sign
  // natsort seems to have an issue with leading
  // characters
  $array2 = explode("#", substr($array1, 1));
  // Use natsort to sort alphanumerics in human format
  natsort($array2);
  // return the results
  foreach ($array2 as $unit) {
    echo "#" . $unit . PHP_EOL;
  };
};

sortUnitOutput( $units );
?>
