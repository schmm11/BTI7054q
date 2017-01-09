<?php
require_once('autoloader.php');

session_start();

if(isset($_POST["login"]) && isset($_POST["pw"]))
{
	$login = $_POST["login"];
	$password = $_POST["pw"];

	if(checklogin($login, $password))
	{
		$_SESSION["user"] = $login;
		$_SESSION["logged_in"] = true;
	}
	else
	{
		$_SESSION = [];
		setcookie(session_name(), '', 1);
		echo "<!DOCTYPE html>\n";
		echo "<p style=\"color: red;\">Invalid credentials, please <a href=\"login.php\">try again</a>.</p>";
	}
}

function checklogin($login, $password)
{
	$user = User::getUserByName($login);
	return ($user != null) && password_verify($password, $user->getPassword());
}
