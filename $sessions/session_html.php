<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session Viewer</title>
</head>
<body>

	<b>Session Result: 
		<?php 

			if (isset($_SESSION['favcolor'])) {
				echo $_SESSION['favcolor'];
			} else {
				echo "No session to show";
			}

		?> 
	</b>

</body>
</html>