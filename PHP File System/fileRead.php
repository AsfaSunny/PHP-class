<?php 

$file = fopen("myDocs.txt", "r");

// echo fread($file, 20);
// echo fread($file, filesize("myDocs.txt"));

echo fgets($file);
echo ftell($file) . "<br>";

echo fgets($file);
echo ftell($file) . "<br>";

echo fgets($file);
echo ftell($file) . "<br>";

// echo fseek($file, 10);
echo fgets($file) . "<br><br>";
echo fpassthru($file) . "<br><br>";


echo rewind($file);
// echo fgets($file) . "<br><br>";


// while (! feof($file)) { //feof means file end of or end of the file
//  	echo fgets($file) . "<br>";
// }


// echo "<ul>";
// while (! feof($file)) {
//  	$all_line = fgets($file) . "<br>";
//  	echo "<li>" . $all_line . "</li>";
// }
// echo "</ul>";


echo fgetc($file) . "<br>";
echo fgetc($file) . "<br>";
echo fgetc($file) . "<br>";
echo fgetc($file) . "<br>";

echo "<pre>";
print_r(file("myDocs.txt"));
echo "</pre>";



?>