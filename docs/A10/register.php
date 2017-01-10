<?php
require_once('autoloader.php');

$username = (isset($_POST["username"]) ? $_POST["username"] : null);
$password = (isset($_POST["password"]) ? $_POST["password"] : null);

if($username && $password)
{
	User::createUserByName($username, $password);
	header("Location: /webshop/login.php"); 
	
}

include 'header.php';
include 'topNav.php';
$console = get_param('console', '0');
include 'asideNav.php';

?>

<article>
	<h1>Kontoregistrierung</h1>

	<form action="register.php" method="post">
		<table>
			<tr>
				<td>
					<label>Benutzername</label>
				</td>
				<td>
					<input type="text" name="username" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Passwort</label>
				</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
		</table>
		<input type="submit" value="Konto erstellen" />
	</form>
</article>

<?php
?>