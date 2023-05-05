<?php 

$connection = mysqli_connect("localhost", "root", "", "learntech") or die("connection error");

$sql_query = "SELECT * FROM `personal_info` WHERE `name` = 'Sunny'";
$result = mysqli_query($connection, $sql_query) or die("result didn't found");


echo "Total Rows: " . mysqli_affected_rows($connection);




?>