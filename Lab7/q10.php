<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php
		$employees = array(
			"John" => 25,
			"Jane" => 30,
			"Bob" => 35,
			"Alice" => 40,
			"Tom" => 45,
			"Samantha" => 50,
			"Harry" => 55,
			"Mary" => 60,
			"Peter" => 65,
			"Sarah" => 70
		);

		echo "<table>";
		echo "<tr><th>Name</th><th>Age</th></tr>";
		foreach ($employees as $name => $age) {
			echo "<tr><td>$name</td><td>$age</td></tr>";
		}
		echo "</table>";
	?>
</body>
</html>
