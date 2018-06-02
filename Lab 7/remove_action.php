<?php

$cookie_name = isset($_POST['cookie_name']) ? $_POST['cookie_name'] : "";
if ($cookie_name === "") {
	exit("Необходимо ввести название cookie!");
}

if (!isset($_COOKIE[$cookie_name])) {
	exit("Ошибка удаления! Cookie с таким названием не существует!");
}

//unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, "", time() - 1);

header("Refresh:0; url=remove.php");

?>