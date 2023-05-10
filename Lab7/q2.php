<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables Example</title>
</head>
<body>
	<?php 
		$name = "Mohith LS";
		$age = 20;
		$isEmployed = false;
		$height = 5.3;

		echo "Name: " . $name . " (" . gettype($name) . ")<br>";
		echo "Age: " . $age . " (" . gettype($age) . ")<br>";
		echo "Is Employed: " . $isEmployed . " (" . gettype($isEmployed) . ")<br>";
		echo "Height: " . $height . " (" . gettype($height) . ")<br>";
	?>
</body>
</html>
