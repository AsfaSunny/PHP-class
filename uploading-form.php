<?php

if (isset($_FILES['image'])) {

	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];

	if (move_uploaded_file($file_tmp, "upload/". 120 . $file_name)) {
		echo "uploaded successfully";
	} else {
		echo "failed to upload";
	}

}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
		
		<input type="file" name="image"> <br>

		<input type="submit" name="upload">

	</form>

</body>
</html>