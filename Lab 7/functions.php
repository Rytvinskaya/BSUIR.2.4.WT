<?php

function print_cookies()
{
	if (count($_COOKIE) == 0) {
		echo "Список cookie в настоящее время пуст!" . "<br><br>";
	} else {

		echo "<b>Название</b> -> <b>Значение</b>" . "<br>";
		
		foreach ($_COOKIE as $key => $value) {			
			echo $key . " -> " . $value . "<br>";
		}
		
		echo "<br>";
	}
}

?>