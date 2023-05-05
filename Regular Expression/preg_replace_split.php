<?php

$string = "I am learning PHP now. So I have to built some project in php.";


$pattern = "/php/i";


$replacement = "Javascript";


echo preg_replace($pattern, $replacement, $string);


?>