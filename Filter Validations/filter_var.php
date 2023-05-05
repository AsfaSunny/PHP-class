<?php

// $exclusive_var = 22;
// $exclusive_var = 80;
$exclusive_var = 20.3;

// if (filter_var($exclusive_var, FILTER_VALIDATE_INT)) {
// 	echo "its an integer";
// } else {
// 	echo "its a float";
// }

// $option = array(
// 			'option' => array(
// 				'min_range' => 30, 
// 				'max_range' => 45
// 			)
// 		);


// if (filter_var($exclusive_var, FILTER_VALIDATE_FLOAT, $option)) {
// 	echo "its a float";
// } else {
// 	echo "its not a float";
// }



// $exclusive_URL = "http://www.ertlogic.com";
$exclusive_URL = "http://www.ertlogic.com/hano.php";


if (filter_var($exclusive_URL, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
	echo "<br> $exclusive_URL is a valid url";
} else {
	echo "<br> $exclusive_URL isn't a valid url";
}

?>