<?php

// echo getcwd() . "<br>";

// chdir("js");
// $current = getcwd();

// echo "<pre>";
// print_r(scandir($current));
// echo "</pre>";



// $current = ".";
// $current = "..";

// echo "<pre>";
// print_r(scandir($current));
// echo "</pre>";






//directory read, close and open
$dir = ".";

if (is_dir($dir)) {
	if ($d = opendir($dir)) {
		while ($filelist = readdir($d)) {
			echo "File Name: " . $filelist . "<br>";
		}
		closedir($d);
	}
}



?>