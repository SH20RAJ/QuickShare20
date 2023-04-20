<!DOCTYPE html>
<html>
<head>
	<title>File Upload Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		input[type="file"] {
			margin-top: 20px;
			margin-bottom: 20px;
			padding: 10px;
			border: none;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			border-radius: 5px;
			background-color: #fff;
			color: #444;
			font-weight: bold;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #388E3C;
		}

		@media only screen and (max-width: 600px) {
			.container {
				max-width: 100%;
				padding: 10px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>File Upload Form</h1>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="file">Select file to upload:</label>
			<input type="file" name="file" id="file">
			<input type="submit" value="Upload File">
		</form>
	</div>
</body>
</html>
