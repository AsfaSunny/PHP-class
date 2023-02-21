<?php

echo "<pre>";
// print_r(glob("*"));
// print_r(glob("css/*"));
// print_r(glob("*.php"));
// print_r(glob("*.txt"));
// print_r(glob("i*"));
// print_r(glob("t*"));
// print_r(glob("*in*"));
// print_r(glob("t*ml"));
// print_r(glob("*", GLOB_MARK)); //FIND THE DIRECTORY OR FOLDER
// print_r(glob("*", GLOB_ONLYDIR));
print_r(glob("{css/*, js/*}", GLOB_BRACE));
echo "</pre>";



// $arr = glob("*");

// foreach ($arr as $filename) {
// 	// echo $filename . " path: " . filesize($filename) . "<br>";
// 	// echo $filename . " real path is: " . realpath($filename) . "<br>";
// }





?>