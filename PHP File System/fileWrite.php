<?php

// $file = fopen("myNew.txt", "w+");
// $file = fopen("myNew.txt", "r+");
$file = fopen("myNew.txt", "a+");

fwrite($file, "\nThese are whole new text. This one too");
// fputs($file, "\nThese are whole new text. This one too");

ftruncate($file, 12);


// fclose($file);

?>