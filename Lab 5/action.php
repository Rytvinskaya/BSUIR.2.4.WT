<?php

include 'functions.php';

$login = isset($_POST['login']) ? $_POST['login'] : "";
if ((strlen($login) < 3) || (strlen($login) > 26))
{
    die("The length of the login must be at least 3 characters, at most 26 characters!");
}

$password = isset($_POST['password']) ? $_POST['password'] : "";
if ((strlen($password) < 3) || (strlen($password) > 64))
{
    die("The length of the password must be at least 3 characters, at most 64 characters!");
}

$password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : "";

LoginSystem::sign($login, $password, $password_confirm);

?>