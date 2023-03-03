<?php


// Open the tasks.txt file in read mode
$file = fopen('tasks.txt', 'r');
// Read the header row
$header = fgetcsv($file, 0, "\t");
// Output the header row
echo implode("\t", $header) . "\n";
// Read the remaining rows
while (($row = fgetcsv($file, 0, "\t")) !== false) {
    // Output the row
    echo implode("\t", $row) . "\n";
}
// Close the file
fclose($file);
?>