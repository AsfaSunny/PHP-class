<?php
// mysqli_fetch_assoc(); //in project
// mysqli_fetch_row();
// mysqli_fetch_array();
// mysqli_fetch_all();
// mysqli_fetch_field();



$connection = mysqli_connect("localhost", "root", "", "learntech") or die("connection error");

$sql_query = "SELECT * FROM `personal_info`";
$result = mysqli_query($connection, $sql_query) or die("result didn't found");


// while ($row = mysqli_fetch_row($result)) {
// 	echo $row[1] . "<br>";
// }

while ($row = mysqli_fetch_field($result)) {
	echo $row->name . "<br>";
}


?>