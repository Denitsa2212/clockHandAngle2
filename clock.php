<!DOCTYPE html>
<html>
<head>
	<title>PHP project</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	include 'includes/links.php';
	?>
	<form action="clock.php" method="get">
		<p></p>
		Моля въведете часa във формат h:mm:ss
		<p></p>
		<input type="text" name="time" placeholder="time...">
		<p></p>
		<input type="submit" name="submit">
	</form>
	<p></p>
	<?php
	if (isset($_GET['time'])) {
		include 'includes/calculations.php';
		echo "The angle between the clock's hands is ".clockHandAngle($_GET['time'])." degrees<br>";
	}
	include 'includes/footer.php';
	?>
</body>
</html>