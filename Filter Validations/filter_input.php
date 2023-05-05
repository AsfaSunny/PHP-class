<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filter Input Validate</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Email: <input type="text" name="email" autocomplete="off"><br><br>

		Marks: <input type="text" name="marks" autocomplete="off"> <br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
	<br><br><br>

	<?php

		if (isset($_REQUEST['submit'])) {

			$Options = array(
				'min_range' => 1, 
				'max_range' => 100
			);

			$email_validate = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
			$marks_validate = filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT, $Options);

			if ($email_validate && $marks_validate) {
				echo "All Field Are Valid";
			} elseif ($email_validate || $marks_validate) {
				echo "One of the fields is Valid";
			} elseif ($email_validate == 0 || $marks_validate == 0) {
				echo "No field is valid";
			}
		}

	?>
	
</body>
</html>