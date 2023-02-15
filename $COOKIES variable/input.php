<?php

$cookie_name = "cookie";
$cookie_value = "Test Purpose only, no threat";

setcookie($cookie_name, $cookie_value, time() + (86000 * 30), '/');

?>


<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super Global variable</title>
	</head>
	<body>

		Value: <h2> <?php echo $_COOKIE[$cookie_value] ; ?> </h2>




	</body>
</html>
