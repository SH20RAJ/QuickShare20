<?php
if ($_FILES["file"]["error"] > 0) {
	echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Id: " .$id = substr($_FILES["file"]["tmp_name"], 8);
  echo "<br>";
	echo "Uploaded file: " . $_FILES["file"]["name"] . "<br>";
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Stored in: " . $_FILES["file"]["tmp_name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" .$id ."-". $_FILES["file"]["name"]);
}
?>
