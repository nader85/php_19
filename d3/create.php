<?php
$my_file = fopen("ds.txt", "w+");
$my_text = "Data Changed in second call";
fwrite($my_file, $my_text);
fclose($my_file);
echo "File has been created !<br>";
?>