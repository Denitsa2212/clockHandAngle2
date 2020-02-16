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
	<form action="clock2.php" method="get">
		<p></p>
		Моля въведете часa във формат h:mm:ss
		<p></p>
		timeNow:<input type="text" name="timeNow">
		<p></p>
		degrees:<input type="text" name="degrees">
		<p></p>
		<input type="submit">
	</form>

	<?php
	if (isset($_GET['timeNow']) && isset($_GET['degrees'])) {
		include 'includes/calculations.php';
		echo "Time in format h:mm:ss is ".clockHandAngle2($_GET['degrees'], $_GET['timeNow']);
	}
	include 'includes/footer.php';
	?>
</body>
</html>