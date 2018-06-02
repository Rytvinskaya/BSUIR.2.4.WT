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
	   <form action="add_action.php" method="POST">
			Название cookie:<br>
				<input type="text" name="cookie_name"/><br><br>
			Значение cookie:<br>
				<input type="text" name="cookie_value"/><br><br>
			Время действия cookie, начиная с текущего момента:<br><br>
			Количество дней:<br>
				<input type="text" name="work_time_days"/><br><br>
			Количество часов:<br>
				<input type="text" name="work_time_hours"/><br><br>
			Количество минут:<br>
				<input type="text" name="work_time_minutes"/><br><br>
			Количество секунд:<br>
				<input type="text" name="work_time_seconds"/><br><br>
			<!-- Buttons -->
				<input type="submit" name="button_add" value="Добавить cookie"/>		
		</form>
	</body>
</html>