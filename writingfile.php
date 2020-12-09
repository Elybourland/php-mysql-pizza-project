<?php 

// file system - part 2

$file = 'quotes.txt';

// opening a file for reading
$handle = fopen($file, 'a+');

// read the file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a single line
// echo fgets($handle) . '<br />';
// echo fgets($handle);

// read a single character
// echo fgetc($handle);
// echo fgetc($handle);

// writing to a file
// fwrite($handle, "\nEverything popular is wrong");
fclose($handle);

unlink($file);


?>