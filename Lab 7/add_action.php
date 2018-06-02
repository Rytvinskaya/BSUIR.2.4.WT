<?php

#region Проверка введённых данных

$cookie_name = isset($_POST['cookie_name']) ? $_POST['cookie_name'] : "";
if ($cookie_name === "") {
	exit("Необходимо ввести название cookie!");
}

$cookie_value = isset($_POST['cookie_value']) ? $_POST['cookie_value'] : "";
if ($cookie_value === "") {
	exit("Необходимо ввести значение cookie!");
}

$work_time_days = isset($_POST['work_time_days']) ? $_POST['work_time_days'] : "";
if ($work_time_days === "") {
	$work_time_days = 0;
} elseif (!is_numeric($work_time_days)) {
	exit("Количество дней должно быть числом!");
}

$work_time_hours = isset($_POST['work_time_hours']) ? $_POST['work_time_hours'] : "";
if ($work_time_hours === "") {
	$work_time_hours = 0;
} elseif (!is_numeric($work_time_hours)) {
	exit("Количество часов должно быть числом!");
}

$work_time_minutes = isset($_POST['work_time_minutes']) ? $_POST['work_time_minutes'] : "";
if ($work_time_minutes === "") {
	$work_time_minutes = 0;
} elseif (!is_numeric($work_time_minutes)) {
	exit("Количество минут должно быть числом!");
}

$work_time_seconds = isset($_POST['work_time_seconds']) ? $_POST['work_time_seconds'] : "";
if ($work_time_seconds === "") {
	$work_time_seconds = 0;
} elseif (!is_numeric($work_time_seconds)) {
	exit("Количество секунд должно быть числом!");
}

#endregion

const SECONDS_IN_DAY = 60 * 60 * 24;
const SECONDS_IN_HOUR = 60 * 60;
const SECONDS_IN_MINUTE = 60;

$expire_date = time()
	+ $work_time_days * SECONDS_IN_DAY
	+ $work_time_hours * SECONDS_IN_HOUR
	+ $work_time_minutes * SECONDS_IN_HOUR
	+ $work_time_seconds;

setcookie($cookie_name, $cookie_value, $expire_date);

header("Refresh:0; url=add.php");

?>