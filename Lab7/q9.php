<!DOCTYPE html>
<html>
<head>
	<title>Welcoming kiran</title>
</head>
<body>
	<?php
		if(isset($_POST['name'])) {
			$name = $_POST['name'];

			switch ($name) {
				case "kiran":
					echo "<h1>Welcome, kiran!</h1>";
					break;
				default:
					echo "<h1>You are not the person!</h1>";
					break;
			}
		}
	?>
	<form method="post">
		<label for="name">Enter your name:</label>
		<input type="text" name="name" id="name">
		<button type="submit">Submit</button>
	</form>
</body>
</html>