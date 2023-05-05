<?php

$exclusive_email = "aas @glmolo.yooo////ui";
$exclusive_URL = "http://www.ertl  ogic.com/hano.php";

echo $exclusive_URL . "<br>";
echo $exclusive_email;


$exclusive_URL = filter_var($exclusive_URL, FILTER_SANITIZE_URL);
$exclusive_email = filter_var($exclusive_email, FILTER_SANITIZE_EMAIL);



if (filter_var($exclusive_URL, FILTER_VALIDATE_URL)) { //url validate
	echo "<br> $exclusive_URL is a valid url";
} else {
	echo "<br> $exclusive_URL isn't a valid url";
}


if (filter_var($exclusive_email, FILTER_VALIDATE_EMAIL)) { //email validate
	echo "<br> $exclusive_email is a valid url";
} else {
	echo "<br> $exclusive_email isn't a valid url <br>";
}




$exclusive_INT = "45.66KLJDFHOI5";
$exclusive_float = "45.2356";


echo $exclusive_INT . "<br>";
echo $exclusive_float;

$exclusive_INT = filter_var($exclusive_INT, FILTER_SANITIZE_NUMBER_INT);
$exclusive_float = filter_var($exclusive_float, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


if (filter_var($exclusive_INT, FILTER_VALIDATE_INT)) { //number validate
	echo "<br> $exclusive_INT is a valid integer";
} else {
	echo "<br> $exclusive_INT isn't a valid integer";
}




if (filter_var($exclusive_float, FILTER_VALIDATE_FLOAT)) { //FLOAT validate
	echo "<br> $exclusive_float is a valid float";
} else {
	echo "<br> $exclusive_float isn't a valid float";
}


?>