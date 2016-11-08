<?php
require_once "db.inc.php";

session_start();
if(isset($_POST["login"]) && isset($_POST["pw"])) {
	$login = $_POST["login"];
	$pw = $_POST["pw"];
if (checklogin($login, $pw))
	$_SESSION["user"] = $login;
}
if (!isset($_SESSION["user"])) {
	echo "<!DOCTYPE html>\n";
	echo "<a href=\"login.php\">Please log in</a>.";
exit;



function checklogin($login, $password)
{
// db error checking omitted...

	$sql_statement = 'SELECT * FROM users WHERE username='.$login;

	$stmt = $db->prepare(
		$sql_statement;
	);
	$stmt->bind_param('s', $login);
	$stmt->execute();
	$result = $stmt->get_result();
	if (!$result || $result->num_rows !== 1) return false;
	$row = $result->fetch_assoc();
	return password_verify($password, $row["password_hash"]);

?>