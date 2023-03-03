<?php

$my_filename = "ds.txt";
$my_file = fopen($my_filename, 'r');
$my_size=filesize($my_filename);
$my_filedata = fread($my_file, $my_size);
fclose($my_file);
echo "File data:<br>";
echo $my_filedata;

$handle = fopen('ds.txt','a+');
fwrite($handle,"\nAdd more lines !");
fclose($handle);
echo "<br>";

$my_filename = "ds.txt";
$my_file = fopen($my_filename, 'r');
$my_size=filesize($my_filename);
$my_filedata2 = fread($my_file, $my_size);
fclose($my_file);
echo "File data:<br>";
echo $my_filedata2;

echo "<br><h2>Read line by line</h2>";
$myfile = fopen("ds.txt","r") or die("Unable to open file!");
echo fgets($myfile); echo "<br>";
echo fgets($myfile);
fclose($myfile);


$myfile =fopen("ds.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "File get content !<br>";

file_put_contents("ds.txt", "\nADD some text in here");
echo file_get_contents("ds.txt");

echo "<br>File get content end !<br>";
?>