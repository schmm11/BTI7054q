<?php
require_once('autoloader.php');

$_SESSION["user"] = "hans";

if(isset($_POST["login"]) && isset($_POST["pw"])) {
	$login = $_POST["login"];
	$pw = $_POST["pw"];
	if (checklogin($login, $pw))
		$_SESSION["user"] = $login;
}
if (!isset($_SESSION["user"])) {
	echo "<!DOCTYPE html>\n";
	echo "<a href=\"login.php\">Something went wrong... <br>Please log in</a>.";
exit;



function checklogin($login, $password)
{

	$user = User::getUserByName($login);

	/*
	$stmt = $db->prepare(
		"SELECT * FROM users WHERE username=?"
	);
	$stmt->bind_param('s', $login);
	$stmt->execute();
	$result = $stmt->get_result();
	if (!$result || $result->num_rows !== 1) return false;
	$row = $result->fetch_assoc();
	*/
	return password_verify($password, $user->password);

?>