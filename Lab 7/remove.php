<?php

include 'functions.php';
print_cookies();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Лабораторная работа №7</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	   <form action="remove_action.php" method="POST">
			Название cookie:<br>
				<input type="text" name="cookie_name"/><br><br>
			<!-- Buttons -->
				<input type="submit" name="button_delete" value="Удалить cookie"/>		
		</form>
	</body>
</html>